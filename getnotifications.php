<?php

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
	unset($tbl);
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
	//if($role == 'q'){}
	//if($role == 's'){}
	//if($role == 'c'){}
	$counter = 0;
	$msgs = array();
	$i=0;
	foreach($rooms as $room){
		$tbl = new table('chat_threads');
		$tbl->cols('t1.id as chatid, t1.chat_text, t1.chat_date');
		$sender = " CONCAT(fr.first_name,' ',fr.last_name) AS sender ";
		$tbl->cols($sender);
		$tbl->join('users','fr.id','t1.from_id','fr');
		$tbl->condition('WHERE', 't1.room_id', $room['id']);
		$tbl->condition('AND', 't1.from_id', $uid, '!=');
		$tbl->condition('AND', 't1.is_read','0');
		$tbl->orderby('t1.id','desc');
		$chats = $tbl->getList();
		unset($tbl);
		$texts = array();
		//$msgs[] = $chats;
		foreach($chats as $chat){
			$counter++;
			$msgs[$i][] = $chat['sender'] ."^^^".$chat['chat_text']."^^^".$chat['chatid'];
		}
		//$msgs[] = $texts;
		$i++;
		//$counter = $counter + $cnt; 
	}
	$return = array('counter'=> $counter,'msgs' => $msgs);
	echo json_encode($return);
	exit;
}
?>