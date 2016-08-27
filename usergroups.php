<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']				= $web['company'].' - User Group';
$web['table']					= 'user_group';
$web['page']					= 'usergroup';
$web['subpage']					= 'usergroup';
$web['editscript']				= 'usergroup.php';
$web['listscript']				= 'usergroups.php';
$web['taskcript']				= 'document_user_group.php';

$web['search']['user_group_name']	= 'User Group';

$web['title']	= 'User Group';
$web['id']		= $request->get('id', '');
$web['task']	= $request->get('task', '');
$web['err']		= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'user_group_name');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$tbl = new table($web['table']);
if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$tbl->delete('id', $removeid, 'in');
	add_log_history('DEL', 'UG', $session->get('uid'), $session->get('userrole'));
}

$tbl->cols('t1.*');
$tbl->cols('(SELECT COUNT(*)  FROM users u WHERE u.user_group_id = t1.id ) AS group_users');
$tbl->condition('WHERE', 't1.company_id', $session->get('company_id'));
if ( $web['sk'] != "" )
	$tbl->having($web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);

$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);

echo $twig->render('front-usergroups.html', array('web' => $web));
?>
