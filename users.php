<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']					= $web['company'].' - Users';
$web['table']						= 'users';
$web['page']						= 'users';
$web['editscript']					= 'user.php';
$web['listscript']					= 'users.php';

$web['search']['user_group_name']	= 'User Group Name';
$web['search']['email']				= 'Email ID';
$web['search']['first_name']		= 'First Name';
$web['search']['last_name']			= 'Last Name';

$web['title']	= 'Users';
$web['id']	= $request->get('id', '');
$web['company_id']	= $session->get('company_id');
$web['task']	= $request->get('task', '');
$web['err']	= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'username');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');
$web['group_id']	= $request->get('group_id', '');

$tbl = new table($web['table']);
if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$tbl->delete('id', $removeid, 'in');
	add_log_history('DEL', 'USER', $session->get('uid'), $session->get('userrole'));
}

$tbl->cols('t1.*');
$tbl->cols('ug.user_group_name');
$tbl->join('user_group', 'ug.id', 't1.user_group_id', 'ug');
$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
if(isset($web['group_id']) && $web['group_id'] > 0)
	$tbl->condition('AND', 't1.user_group_id', $web['group_id']);
$tbl->condition('AND', '(t1.userrole', 'u');
$tbl->condition('OR', 't1.userrole', 'c)');
if ( $web['sk'] != "" )
	$tbl->condition('AND', $web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);

$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);

echo $twig->render('front-users.html', array('web' => $web));
?>
