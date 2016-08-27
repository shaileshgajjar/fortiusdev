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

$web['id']			= $request->get('id', '0');
$web['task']		= $request->get('task', '');
$web['err']			= $request->get('err', '');
$web['title']		= 'Computer Group '.($web['id'] == '0' ? 'New' : 'Edit');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'computer_group_name');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$web['fields'] = array();
$web['fields']['computer_group_name']	= array('value' => '');

$web['tbl'] = new table($web['table']);
if ( $web['id'] > 0 )
	$web['tbl']->load($web['id']);

if ( $web['task'] == 'save' )
{
	$web['err'] = '';
	foreach($web['fields'] as $key => $value)
		$web['tbl']->setValue($key, $request->get($key, ''));
	if ( $web['err'] == '' )
	{
		$web['tbl']->setValue('company_id', $session->get('company_id'));
		$web['tbl']->save();
		$act = ($web['id'] == 0)?'ADD':'EDIT';
		add_log_history($act, 'GROUP', $session->get('uid'), $session->get('userrole'));
	}
}

foreach($web['fields'] as $key => $value)
	$web['fields'][$key]['value'] = $web['tbl']->getValue($key);
unset($web['tbl']);

echo $twig->render('front-computer-group.html', array('web' => $web));
