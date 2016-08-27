<?php
require(dirname(__FILE__).'/config/config.new.php');
ini_set('display_errors', 0);
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$c_id 			= $request->get('company_id', '');
$sent_from_id 		= $request->get('sent_from_id', '');
$sent_from_role	= $request->get('sent_from_role', '');
$sent_to_id		= $request->get('sent_to_id', 0);
$sent_to_role		= $request->get('sent_to_role', '');
$type			= $request->get('chat_type', 0);
$room_id 		= 0; 
if($type == 1 && $sent_from_role == 'u' && $sent_to_id == 0){
	$users = new table('users');
	$users->find(array('company_id','userrole'),array($c_id, 'c'));
	if($users->getValue('id')){
		$sent_to_id = $users->getValue('id');
	}
}
$find_fld = array();
$find_val = array();
$dt_created 		= date('Y-m-d H:i:s', mktime(date('H')+5, date('i')+30, date('s'), date('m'), date('d'), date('Y')));

$tbl = new table('chats');

if( ($sent_from_role == 'c' || $sent_from_role == 'u' ) || ($sent_to_role == 'u' || $sent_to_role == 'c' || $sent_to_role == 'g' ) ){
		$tbl->find(array('company_id','sent_from_id','sent_to_id'), array($c_id,$sent_from_id, $sent_to_id));
}else{
		$tbl->find(array('sent_from_id','sent_to_id'), array($sent_from_id, $sent_to_id));
}

$room_id = $tbl->getValue('id');
if($room_id > 0 ){
	echo $room_id;
	exit;
}

if(!$room_id || $room_id == 0){
	$tbl2 = new table('chats');
	if( ($sent_from_role == 'c' || $sent_from_role == 'u' ) || ($sent_to_role == 'u' || $sent_to_role == 'c' || $sent_to_role == 'g' ) ){
			$tbl2->find(array('company_id','sent_from_id','sent_to_id'), array($c_id,$sent_to_id, $sent_from_id));
	}else{
			$tbl2->find(array('sent_from_id','sent_to_id'), array($sent_to_id, $sent_from_id));
	}
	$room_id = $tbl2->getValue('id');
	if($room_id > 0){
		echo $room_id ;
		exit;
	}
}

$tbl->setValue('id', 0);
$tbl->setValue('company_id', $c_id);
$tbl->setValue('sent_from_id', $sent_from_id);
$tbl->setValue('sent_from_role', $sent_from_role);
$tbl->setValue('sent_to_id', $sent_to_id);
$tbl->setValue('sent_to_role', $sent_to_role);
$tbl->setValue('chat_type', $type);
$tbl->setValue('dt_created', $dt_created);
$tbl->save();
$primary_id = $tbl->getValue('id');
unset($tbl);
echo $primary_id;
exit;

?>