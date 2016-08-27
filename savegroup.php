<?php
//error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['task']	= $request->get('task', '');
$html = '';
if ( $web['task'] == 'save' )
{
	$tbl = new table('user_group');
	$tbl->setValue('id', 0);
	$tbl->setValue('user_group_name', $request->get('user_group_name', ''));
	$tbl->setValue('company_id', $session->get('company_id'));
	$tbl->save();
	add_log_history('ADD', 'UG', $session->get('uid'), $session->get('userrole'));
	
	$conditions[0] = array('type' => 'WHERE', 'field' => 'company_id', 'value' => $session->get('company_id'));
	$html .= '<option value="0">Select User Group</option>';
	$html .= getdropdown('user_group', 'id', 'user_group_name', 0, $conditions);
}
echo $html;
?>