<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$task = $request->get('task', '');
if( $task == 'save_notification' )
{
	$uid		= $session->get('uid');
	$company_id	= $session->get('company_id');
	$tbl = new table('notification_settings');
	$nid = $request->get('nid', 0);
	$found = $tbl->find(array('users_id', 'comp_id'), array($uid, $company_id));
	
	if ( $found )
		$act = 'EDIT';
		
	else
	{
		$act = 'ADD';
		$tbl->setValue('id', 0);
	}
	$hours = ($request->get('hours','') == '' )? 23 : $request->get('hours','') ;
	$minutes = ($request->get('minutes','') == '' )? 59 : $request->get('minutes','') ;
	$seconds = "00";
	$tbl->setValue('users_id', $session->get('uid', ''));
	$tbl->setValue('comp_id', $session->get('company_id', ''));
	$tbl->setValue('userrole', $session->get('userrole', ''));
	$tbl->setValue('freq', $request->get('freq', ''));
	$tbl->setValue('day', $request->get('day', ''));
	$tbl->setValue('content', $request->get('content', ''));
	$tbl->setValue('alternate_email_id', $request->get('alternate_email_id', ''));
	$tbl->setValue('time_to_send', $hours.":".$minutes.":".$seconds);
	$tbl->save();
	
	add_log_history($act, 'N_SET', $session->get('uid'), $session->get('userrole'));
	unset($tbl);
}
if ( $task == 'save_settings' )
{
	$tbl = new table('settings');
	$tbl->load(1);
		
	$tbl->setValue('assr_company_name', $request->get('assr_company_name', ''));
	$tbl->setValue('assr_company_address', $request->get('assr_company_address', ''));
	$tbl->setValue('assr_company_url', $request->get('assr_company_url', ''));
	$tbl->setValue('upcoming_reminder', $request->get('upcoming_reminder', 7));
	$tbl->setValue('over_due_reminder', $request->get('over_due_reminder', 7));
	$tbl->setValue('failed_task_due_date', $request->get('failed_task_due_date', 7));
	$tbl->setValue('email_from', $request->get('email_from', ''));
	$tbl->setValue('sparkpost_key', $request->get('sparkpost_key', ''));
	$tbl->setValue('sparkpost_end_url', $request->get('sparkpost_end_url', ''));
	$tbl->save();
	add_log_history('EDIT', 'SET',  $session->get('uid'), $session->get('userrole'));
	unset($tbl);
}
?>