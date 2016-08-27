<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
ini_set('display_errors', 1); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$uid		= $session->get('uid');
$role	= $session->get('userrole');
if($uid){
	$tbl = new table('chats');
	$tbl->cols('t1.id');
	$tbl->condition('WHERE', 't1.sent_to_id', $uid);
	$tbl->condition('OR', 't1.sent_from_id', $uid);
	$rooms = $tbl->getList();
	//if current users userrole is company user
	if($role == 'u'){
		$gid = $session->get('user_group_id'); // user group id
		$tbl = new table('chats');
		$tbl->cols('t1.id');
		$tbl->condition('WHERE', 't1.sent_to_id', $gid);
		$tbl->condition('AND', 't1.sent_to_role', 'g');
		$rooms2 = $tbl->getList();
		unset($tbl);
	}
	if($rooms2){
		$rooms = array_merge($rooms, $rooms2);
	}
	unset($tbl);
	$counter = 0;
	$msgs = array();
	$i=0;
	$messages = '';
	foreach($rooms as $room){
		$tbl = new table('chat_threads');
		$tbl->cols('t1.id as chatid, t1.chat_text, t1.chat_date');
		if($role == 's' || $role == 'q')
			$tbl->cols('c.company_name AS company');
		$sender = " CONCAT(fr.first_name,' ',fr.last_name) AS sender ";
		$tbl->cols($sender);
		$tbl->join('users','fr.id','t1.from_id','fr');
		if($role == 's' || $role == 'q')
			$tbl->join('customer','c.id','fr.company_id','c');
		$tbl->condition('WHERE', 't1.room_id', $room['id']);
		$tbl->condition('AND', 't1.from_id', $uid, '!=');
		$tbl->condition('AND', 't1.is_read', '0');
		$tbl->orderby('t1.id','desc');
		$chats = $tbl->getList();
		$msgs[$i] = array(); 
		$html = ''; 		
		foreach( $chats as $rw1)
		{
			$company = (isset($rw1['company'])) ? "&nbsp;&nbsp;<i><b>From </b> :" . $rw1['company']."</i>" : "";
			//$sender = ($rw1['from_id'] == $uid ) ? "<b> You wrote </b> : <small>" .$rw1['chat_date']."</small>" : "<b>".$rw1['sender'] ." </b>:  <small>". $rw1['chat_date'] . "</small>";
			$sender =  "<b>".$rw1['sender'] ." </b>:  <small>". $rw1['chat_date'] . "</small>";
			$html .= '<p class="alert-info" style="padding:3px;">'.$sender. $company . '</p>';
			$html .= '<p>'.$rw1['chat_text'].'</p>';
			$tbl2 = new table('chat_threads');
			$tbl2->load($rw1['chatid']);
			$tbl2->setValue('is_read',1);
			$tbl2->save();
			unset($tbl2);
		}
		$messages .= $html;
		
	}
	echo $messages;
	exit;
}
?>