<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
	
$task 	= $request->get('task', '');
$date2 	= $request->get('c_due_date', '');
$did	 	= $request->get('did', '');
$dArr 	= explode('-', $date2);
$c_due_date = date("Y-m-d", mktime(0, 0, 0, $dArr[1], $dArr[2], $dArr[0]));
$ready_for = $request->get('ready_for', '');
$updated_by = $request->get('updated_by', '');
$tbl = new table('document');
if($task == 'save')
{
	$next_dt = date('Y-m-d', strtotime("+".$web['settings']['failed_task_due_date']['value']." day"));
	if(strtotime($c_due_date) >  strtotime($next_dt) )
		$completion_dt = $next_dt;
	else
		$completion_dt = date('Y-m-d', strtotime('-1 day', strtotime($c_due_date)));
	$tbl->load($did);
	$tbl->setValue('ready_for', $ready_for);
	$tbl->setValue('completion_date', $completion_dt);
	$tbl->setValue('updated_on', date('Y-m-d'));
	$tbl->setValue('updated_by', $updated_by);
	$tbl->save();
	$act = ($ready_for == '0' ) ? 'READY':'NREADY';
	add_log_history($act, 'PROC', $session->get('uid'), $session->get('userrole') );
}
?>