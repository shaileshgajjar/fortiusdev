<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']					= $web['company'].' - Computer/Server';
$web['table']						= 'computer';
$web['page']						= 'computer';
$web['editscript']					= 'computer.php';
$web['listscript']					= 'computers.php';

$web['search']['os_type']				= 'Os Type';
$web['search']['computer_group_name']	= 'Computer Group';
$web['search']['computer_name']			= 'Computer Name';

$web['title']		= 'Computer/Server';
$web['id']			= $request->get('id', '');
$web['company_id']	= $session->get('company_id');
$web['task']		= $request->get('task', '');
$web['err']			= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'os_type');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$tbl = new table($web['table']);
if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$tbl->delete('id', $removeid, 'in');
	add_log_history('DEL', 'COMPUTER', $session->get('uid'), $session->get('userrole'));
}

$tbl->cols('t1.*, cg.computer_group_name');
$tbl->join('computer_group', 'cg.id', 't1.computer_group_id', 'cg');
$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
if ( $web['sk'] != "" )
	$tbl->condition('AND', $web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);

$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);

echo $twig->render('front-computers.html', array('web' => $web));
?>
