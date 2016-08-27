<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
ini_set('display_errors', 1); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$company_id 	= $request->get('company_id',0);
$procedure_id 	= $request->get('procedure_id',0);
$from_id 	= $request->get('from_id',0);
$from_role 	= $request->get('from_role',0);
$to_id 		= $request->get('to_id',0);
$to_role 	= $request->get('to_role','');
$chat_type 	= $request->get('chat_type',0);
$roomId 		= $request->get('room_id',0);

//here 'g'=group  'u'=company users  'a'=qsa  'q'=qa  'c'=company admin 'a'= system admin 
//first here we will get the room of chat then we will fetch all conversions made in that room
//if QA or QSA want to chat to with group of all users belonging company which has been assigned to task or Requirement then it will show all threads here
if($to_role  == 'q' ){
		$tbl = new table('chat_threads');
		$tbl->cols('t1.id as chatid, t1.chat_text, t1.chat_date, t1.from_id, t1.is_read');
		$sender = " CONCAT(fr.first_name,' ',fr.last_name) AS sender ";
		$tbl->cols($sender);
		$tbl->join('users','fr.id','t1.from_id','fr');
		$tbl->condition('WHERE', 't1.room_id', $roomId);
		$tbl->condition('AND', 't1.procedure_id', $procedure_id);
		$tbl->orderby('t1.id','desc');
		$chats = $tbl->getList();
		$msgs[$i] = array(); 
		$html = '<div class="chat-list" >'; 	
		foreach( $chats as $rw1)
		{
			$alignCls = "pull-left";
			//if($rw1['from_id'] != $from_id)
				//$alignCls = "pull-right";
			$status = ($rw1['is_read'] == 1 ) ? " <i class='glyphicon glyphicon-ok pull-right' > </i> " : "";	
			$sender = ($rw1['from_id'] == $from_id ) ? "<b> You wrote </b> : <small>" .$rw1['chat_date']."</small>" : "<b>".$rw1['sender'] ." </b>:  <small>". $rw1['chat_date'] . "</small>";
			//$sender =  "<b>".$rw1['sender'] ." </b>:  <small>". $rw1['chat_date'] . "</small>";
			$html .= '<p class="alert-info" style="padding:3px;">'.$sender.'</p>';
			$html .= '<p>'.$rw1['chat_text'].$status.'</p>';
			if( $rw1['from_id'] != $from_id){
				$tbl2 = new table('chat_threads');
				$tbl2->load($rw1['chatid']);
				$tbl2->setValue('is_read',1);
				$tbl2->save();
				unset($tbl2);
			}	
		}
		$html .='</div>';
	echo $html;
	exit;
}
$roomsArr = array();
if($to_role == 'g'){
	$tbl = new table('chats');
	$tbl->cols('t1.id');
	$tbl->condition('WHERE', 't1.sent_to_id', $to_id);
	$tbl->condition('AND', 't1.sent_to_role', $to_role);
	$tbl->condition('AND', 't1.sent_from_id', $from_id);
	$rooms = $tbl->getList();
	unset($tbl);
	$tbl = new table('chats');
	$tbl->cols('t1.id');
	$tbl->condition('WHERE', 't1.sent_from_role', $from_role);
	$tbl->condition('AND', 't1.sent_from_id', $from_id);
	$tbl->condition('AND', 't1.company_id', $company_id);
	$rooms2 = $tbl->getList();
	unset($tbl);
	if($rooms){
		foreach($rooms as $room)
				$roomsArr[] = $room['id']; 
	}
	if($rooms2){
		foreach($rooms2 as $room){
				if(!in_array($room['id'],$roomsArr))
					$roomsArr[] = $room['id'];
		}
	}
	
	
}
if($to_role != 'g'){	
	$tbl = new table('chats');
	$tbl->cols('t1.id');
	$tbl->condition('WHERE', 't1.sent_from_role', $from_role);
	$tbl->condition('AND', 't1.sent_from_id', $from_id);
	$tbl->condition('AND', 't1.sent_to_role', $to_role);
	$tbl->condition('AND', 't1.sent_to_id', $to_id);
	$tbl->condition('AND', 't1.company_id', $company_id);
	$rooms2 = $tbl->getList();
	unset($tbl);
	if($rooms2){
		foreach($rooms2 as $room)
			if(!in_array($room['id'],$roomsArr))
				$roomsArr[] = $room['id']; 
	}
}

if(!empty($roomsArr)){
	$counter = 0;
	$msgs = array();
	$i=0;
	$messages = '';
	foreach($roomsArr as $roomId){
		$tbl = new table('chat_threads');
		$tbl->cols('t1.id as chatid, t1.chat_text, t1.chat_date, t1.from_id');
		$sender = " CONCAT(fr.first_name,' ',fr.last_name) AS sender ";
		$tbl->cols($sender);
		$tbl->join('users','fr.id','t1.from_id','fr');
		$tbl->condition('WHERE', 't1.room_id', $roomId);
		$tbl->condition('AND', 't1.procedure_id', $procedure_id);
		$tbl->orderby('t1.id','desc');
		$chats = $tbl->getList();
		$msgs[$i] = array(); 
		
		$html = '<div class="chat-list" >'; 	
		foreach( $chats as $rw1)
		{
			$alignCls = "pull-left";
			//if($rw1['from_id'] != $from_id)
				//$alignCls = "pull-right";
			$sender = ($rw1['from_id'] == $from_id ) ? "<b> You wrote </b> : <small>" .$rw1['chat_date']."</small>" : "<b>".$rw1['sender'] ." </b>:  <small>". $rw1['chat_date'] . "</small>";
			//$sender =  "<b>".$rw1['sender'] ." </b>:  <small>". $rw1['chat_date'] . "</small>";
			$html .= '<p class="alert-info" style="padding:3px;">'.$sender.'</p>';
			$html .= '<p>'.$rw1['chat_text'].'</p>';
			if( $rw1['from_id'] != $from_id){
				$tbl2 = new table('chat_threads');
				$tbl2->load($rw1['chatid']);
				$tbl2->setValue('is_read',1);
				$tbl2->save();
				unset($tbl2);
			}
		}
		$html .='</div>';
		$messages .= $html;
		
	}
	echo $messages;
}
exit;

?>