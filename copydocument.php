<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$id				= $request->get('id', 0);
$document		= $request->get('document', '');
$company_id		= $request->get('company_id', '');
$pid			= $request->get('pid', '');
$path			= '/uploads/documents/'.$company_id.'/';

$tbl = new table('procedure_document');
$tbl->setValue('procedure_id', $pid);
$tbl->setValue('company_id', $company_id);
$tbl->setValue('upload_date', date('Y-m-d  h:i:s'));
$tbl->save();
$maxid = $tbl->getValue('id');

$newdocument	= str_replace('_'.$id.'.', '_'.$maxid.'.', $document);
$path = __DIR__.'/uploads/documents/'.$request->get('company_id');
if (!is_dir($path))
{
	mkdir($path, 0777);
}
copy($path."/".$document, $path."/".$newdocument);
$tbl->setValue('document', $newdocument);
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
echo "Uploaded:\n$html";
?>