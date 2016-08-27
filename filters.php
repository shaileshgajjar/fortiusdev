<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']				= $web['company'].' - Filter';
$web['table']					= 'filter';
$web['page']					= 'filters';
$web['subpage']					= 'filters';
$web['editscript']				= 'filter.php';
$web['listscript']				= 'filters.php';

$web['search']['filter_name']	= 'Filter Name';

$web['title']	= 'Filter';
$web['id']		= $request->get('id', '');
$web['task']	= $request->get('task', '');
$web['err']		= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'filter_name');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'rowid');
$web['ot']	= $request->get('ot', 'asc');

$tbl = new table($web['table']);
if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$tbl->delete('id', $removeid, 'in');
	add_log_history('DEL', 'FILTER', $session->get('uid'), $session->get('userrole'));
}

$tbl->condition('WHERE', 't1.user_id', $session->get('uid'));
if ( $web['sk'] != "" )
	$tbl->condition('AND', $web['sb'], "%".$web['sk']."%", 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);

$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);

echo $twig->render('front-filters.html', array('web' => $web));
?>
