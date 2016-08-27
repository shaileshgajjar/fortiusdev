<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
$allowed = array('txt', 'doc', 'docx', 'xls', 'xlsx', 'pdf', 'jpg', 'jpeg', 'vsd', 'vss', 'vst', 'vdx', 'vsx', 'vtx');
$notallowed = array('php', 'js');

foreach($_FILES as $file) {
    $n = $file['name'];
	$extary = explode(".", $n);
	$ext = $extary[count($extary)-1];
    $s = $file['size'];
	if ( in_array($ext, $notallowed) )
	{
		echo 'Error: '.implode(', ', $allowed).' files are not allowed.';
		exit;
	}
    if (is_array($n)) {
        $c = count($n);
        for ($i=0; $i < $c; $i++)
		{
            echo "<br>uploaded: " . $n[$i] . " (" . $s[$i] . " bytes)";
        }
    }
    else
	{
		$pid = $request->get('cnou', 0);
		$company_id = $request->get('company_id', 0);
		$tbl = new table('procedure_document');
		$tbl->setValue('procedure_id', $pid);
		$tbl->setValue('company_id', $company_id);
		$tbl->setValue('upload_date', date('Y-m-d  h:i:s'));
		$tbl->save();
		$maxid = $tbl->getValue('id');
		$path = dirname(__FILE__).'/uploads/documents/'.$company_id.'/';
		if ( !is_dir($path) )
		{
			mkdir($path, 0777);
		}
		$document = str_replace(".".$ext, "", $n).'_'.$maxid.'.'.$ext;
		copy($file['tmp_name'], $path.$document);
		$tbl->setValue('document', $document);
		$tbl->save();
		unset($tbl);
		
		add_log_history('UP', 'DOC', $session->get('uid'), $session->get('userrole'));
		$tbl = new table('procedure_document');
		$tbl->cols('t1.*');
		$tbl->condition('WHERE','t1.company_id', $company_id);
		$tbl->condition('AND','t1.procedure_id', $pid);
		$docs = $tbl->getList();
		$html = '<button class="btn btn-default" id="dLabe'.$pid.'" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
		$html .= 'Documents';
		$html .= '<span class="caret"></span>';
		$html .= '</button>';
		$html .= '<ul class="dropdown-menu" id="documents'.$pid.'" role="menu" aria-labelledby="dLabel">';
		foreach($docs as $rw1 )
			$html .= '<li><a class="pull-left" href="/uploads/documents/'.$rw1['company_id'].'/'.$rw1['document'].'" target="_blank">'.$rw1['document'].'&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-save" title="Save File" ></span></a><small> '.$rw1['upload_date'].'</small><a href="javascript:deletedoc(\''.$rw1['id'].'\', \''.$rw1['document'].'\', \''.$company_id.'\', \''.$pid.'\');" class="pull-right"><span class="glyphicon glyphicon-remove text-danger"></span></a></li>';
		$html .= '</ul>';
		unset($tbl);
        echo "Uploaded: $n\n$html";
    }
}
?>