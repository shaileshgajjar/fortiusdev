<?php
require(dirname(__FILE__).'/config/config.new.php');
//xss mitigation functions
ini_set('display_errors', 1);
function xssafe($comment,$encoding='UTF-8')
{
   return htmlspecialchars($comment,ENT_QUOTES | ENT_HTML401,$encoding);
}
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$procedure_id	= $request->get('pid', 0);
$room_id 		= $request->get('room_id');
$from_id 		= $request->get('from_id');
$comment 		= $request->get('comment', '');
//$comment 		= xssafe($comment);
$date =  date('Y-m-d H:i:s', mktime(date('H')+5, date('i')+30, date('s'), date('m'), date('d'), date('Y')));
echo $comment;
if( isset($from_id) && $from_id != ''){
	$tbl = new table('chat_threads');
	$tbl->setValue('id', 0);
	$tbl->setValue('room_id',$room_id);
	$tbl->setValue('chat_text',$comment);
	$tbl->setValue('chat_date',$date);
	$tbl->setValue('procedure_id',$procedure_id );
	$tbl->setValue('from_id',$from_id );
	$tbl->setValue('is_read', 0);
	$tbl->save();
	unset($tbl);
	add_log_history('ADD', 'CMT', $session->get('uid'), $session->get('userrole'));
}
?>