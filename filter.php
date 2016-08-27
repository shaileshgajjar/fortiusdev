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

$web['id']						= $request->get('id', '0');
$web['task']					= $request->get('task', '');
$web['err']						= $request->get('err', '');
$web['title']					= 'Filter '.($web['id'] == '0' ? 'New' : 'Edit');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'filter_name');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$web['fields'] = array();
$web['fields']['filter_name']	= array('value' => '');
$web['fields']['description']	= array('value' => '');

$web['tbl'] = new table($web['table']);
if ( $web['id'] > 0 )
	$web['tbl']->load($web['id']);

if ( $web['task'] == 'save' )
{
	foreach($web['fields'] as $key => $value)
		$web['tbl']->setValue($key, $request->get($key, ''));
	$web['tbl']->setValue('user_id', $session->get('uid'));
	$web['tbl']->save();
	$act = ($web['id'] == 0)?'ADD':'EDIT';
	add_log_history($act, 'FILTER', $session->get('uid'), $session->get('userrole'));
}

foreach($web['fields'] as $key => $value)
	$web['fields'][$key]['value'] = $web['tbl']->getValue($key);
unset($web['tbl']);

echo $twig->render('front-filter.html', array('web' => $web));
?>
