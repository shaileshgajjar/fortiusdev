<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']	= $web['company'].' - Computer/Server';
$web['table']		= 'computer';
$web['page']		= 'computer';
$web['editscript']	= 'computer.php';
$web['listscript']	= 'computers.php';

$web['id']			= $request->get('id', '0');
$web['task']		= $request->get('task', '');
$web['err']			= $request->get('err', '');
$web['title']		= 'Computer/Server '.($web['id'] == '0' ? 'New' : 'Edit');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'os_type');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$web['fields'] = array();
$web['fields']['computer_group_id']	= array('value' => '');
$web['fields']['os_type']			= array('value' => '');
$web['fields']['computer_name']		= array('value' => '');
$web['fields']['audit_key']			= array('value' => '');

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
		$refid = $web['tbl']->getValue('id');
		$audit_key = md5($refid.'|'.$session->get('company_id').'|'.$web['fields']['computer_name']['value']);
		$web['tbl']->setValue('audit_key', $audit_key);
		$web['tbl']->save();
		$act = ($web['id'] == 0)?'ADD':'EDIT';
		add_log_history($act, 'COMPUTER', $session->get('uid'), $session->get('userrole'));
	}
}

foreach($web['fields'] as $key => $value)
	$web['fields'][$key]['value'] = $web['tbl']->getValue($key);
unset($web['tbl']);

$conditions[] = array('type' => 'WHERE', 'field' => 'company_id', 'value' => $session->get('company_id'));
$web['computergroups'] = getdropdown('computer_group', 'id', 'computer_group_name', $web['fields']['computer_group_id']['value'], $conditions);

echo $twig->render('front-computer.html', array('web' => $web));
