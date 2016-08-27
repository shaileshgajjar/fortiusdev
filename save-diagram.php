<?php
//error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
error_reporting(0);
require(dirname(__FILE__).'/config/config.new.php');
if( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if( !in_array($session->get('userrole'), $role) )
$response->redirect("index.php?err=3");
	
$fields = array();
$task		= $request->get('task', '');
$id			= $request->get('id', '');
$section_id = $request->get('section_id', '');
if( $task == 'savediagram' ){
	if( isset($_FILES)){
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
		$allowed = array('png','jpg', 'jpeg','gif', 'pdf');
		$notallowed = array('php', 'js');
		$n = $_FILES['diagram']['name'];
		$extary = explode(".", $n);
		$ext = $extary[count($extary)-1];
		$s = $_FILES['diagram']['size'];
		$file_type = $_FILES['diagram']['type'];
		
		if( in_array($ext, $notallowed) ){
			echo 'Error: '.implode(', ', $allowed).' files are not allowed.';
			exit;
		}
		if(is_array($n)){
			$c = count($n);
			for($i=0; $i < $c; $i++){
				echo "<br>uploaded: " . $n[$i] . " (" . $s[$i] . " bytes)";
			}
		}
		else{
			$path = dirname(__FILE__).'/uploads/diagrams/';
			if( !is_dir($path) ){
				mkdir($path, 0777);
			}
			$document = str_replace(".".$ext, "", $n).'_'.$id.'.'.$ext;
			copy($_FILES['diagram']['tmp_name'], $path.$document);
			$tbl = new table('network_diagram');
			$tbl->setValue('company_id', $id);
			$tbl->setValue('section_id', $section_id);
			$tbl->setValue('diagram_path', $document);
			$tbl->setValue('file_type', $file_type);
			$tbl->setValue('upload_date', date('Y-m-d  h:i:s'));
			$tbl->save();
			unset($tbl);
			$tbl = new table('network_diagram');
			$tbl->cols('t1.*');
			$tbl->condition('WHERE', 't1.company_id', $id);
			$tbl->condition('AND', 't1.section_id', $section_id);
			$rows = $tbl->getList();
			$html = '';
			foreach($rows as $rw)
			$html .='<li id="list_'.$rw['id'].'"> '.$rw['diagram_path'].' Date : '.$rw['upload_date'].' &nbsp;&nbsp;&nbsp;<span onclick="javasctipt: removethis('.$rw['id'].','.$rw['company_id'].')" ><i class="fa fa-trash trash-icon"></i></span></li>';
			
			echo "Uploaded: $n\n$html";
			
		}
	}
}
?>