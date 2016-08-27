<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$set_type = $request->get('settings', '');
if($set_type)
{
	$notification = new table('notification_settings');
	$notification->find(array('users_id', 'userrole'), array($session->get('uid'), $session->get('userrole')));
	
	$session->set('n_id', $notification->getValue('id') );
	$session->set('n_users_id', $notification->getValue('users_id') );
	$session->set('n_comp_id', $notification->getValue('comp_id') );
	$session->set('n_freq', $notification->getValue('freq') );
	$session->set('n_day', $notification->getValue('day') );
	$session->set('n_time_to_send', $notification->getValue('time_to_send') );
	$session->set('n_alternate_email_id', $notification->getValue('alternate_email_id') );
	if($session->get('userrole') == 'c')
		$session->set('n_content', $notification->getValue('content') );
		
	echo $session->get('n_id') . "<br>";
	echo $session->get('n_comp_id');
}	
?>	