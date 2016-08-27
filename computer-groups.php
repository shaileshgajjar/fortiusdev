<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']	= $web['company'].' - Computer Group';
$web['table']		= 'computer_group';
$web['page']		= 'computer_group';
$web['editscript']	= 'computer-group.php';
$web['listscript']	= 'computer-groups.php';

$web['search']['computer_group_name']	= 'Computer Group Name';

$web['title']		= 'Computer Group';
$web['id']			= $request->get('id', '');
$web['company_id']	= $session->get('company_id');
$web['task']		= $request->get('task', '');
$web['err']			= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'computer_group_name');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$tbl = new table($web['table']);
if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$tbl->delete('id', $removeid, 'in');
	add_log_history('DEL', 'GROUP', $session->get('uid'), $session->get('userrole'));
}

$tbl->cols('t1.*');
$tbl->condition('WHERE', 'company_id', $web['company_id']);
if ( $web['sk'] != "" )
	$tbl->condition('AND', $web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);

$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);

echo $twig->render('front-computer-groups.html', array('web' => $web));
?>
