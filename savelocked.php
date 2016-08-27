<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$task = $request->get('task', '');
$tbl = new table('document');
if($task == 'save')
{
	$did	 	= $request->get('did', '');
	$locked 	= $request->get('locked', '');
	$tbl->load($did);
	$tbl->setValue('locked', $locked);
	$tbl->save();
	$act = ($locked == '0' ) ? 'LCK':'UNLCK';
	add_log_history($act, 'PROC', $session->get('uid'), $session->get('userrole') );
}
?>