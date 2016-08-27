<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$task = $request->get('task', '');
if ( $task == 'save' )
{
	$user_group_id = $request->get('user_group_id', '');
	$tbl = new table('users');
	$tbl->load($session->get('uid'));
	$tbl->setValue('user_group_id', $user_group_id);
	$tbl->save();
	$session->set('user_group_id', $user_group_id);
	add_log_history('CHNG', 'UG',  $session->get('uid'), $session->get('userrole'));
	unset($tbl);
}
?>