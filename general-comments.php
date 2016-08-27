<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
ini_set('display_errors', 1); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$room_id		= $request->get('room_id',0);
$current_user	= $request->get('current_user',0);
if($room_id){
	$tbl = new table('chats');
	$tbl->load($room_id);
	$cid 	= $tbl->getValue('company_id'); 
	$fromid 	= $tbl->getValue('sent_from_id'); 
	$toid 	= $tbl->getValue('sent_from_id'); 
	$type 	= $tbl->getValue('chat_type');
	unset($tbl);
	$tbl = new table('chat_threads');
	$tbl->cols('t1.*');
	$sender = " CONCAT(fr.first_name,' ',fr.last_name) AS sender ";
	$tbl->cols($sender);
	$tbl->join('users','fr.id','t1.from_id','fr');
	$tbl->condition('WHERE', 't1.room_id', $room_id);
	$rows = $tbl->getList();
	unset($tbl);
	$html = ''; 
	foreach( $rows as $rw1)
	{
		$sender = ($rw1['from_id'] == $current_user ) ? "<b> You wrote </b> : <small>" .$rw1['chat_date']."</small>" : "<b>".$rw1['sender'] ." </b>:  <small>". $rw1['chat_date'] . "</small>";
		$html .= '<p class="alert-info" style="padding:3px;">'.$sender.'</p>';
		$html .= '<p>'.$rw1['chat_text'].'</p>';
		if( $rw1['from_id'] != $current_user){
				$tbl2 = new table('chat_threads');
				$tbl2->load($rw1['id']);
				$tbl2->setValue('is_read',1);
				$tbl2->save();
				unset($tbl2);
		}
	}
	echo $html;
	exit;
}
?>