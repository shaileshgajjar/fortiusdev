<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']	= $web['company'].' - Users';
$web['table']		= 'users';
$web['page']		= 'users';
$web['editscript']	= 'user.php';
$web['listscript']	= 'users.php';

$web['id']			= $request->get('id', '0');
$web['task']		= $request->get('task', '');
$web['err']			= $request->get('err', '');
$web['title']		= 'User '.($web['id'] == '0' ? 'New' : 'Edit');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'username');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$web['fields'] = array();
$web['fields']['email']			= array('value' => '');
$web['fields']['user_group_id']	= array('value' => '');
$web['fields']['title']			= array('value' => '');
$web['fields']['first_name']		= array('value' => '');
$web['fields']['last_name']		= array('value' => '');
$web['fields']['company_name']		= array('value' => '');
$web['fields']['mobile']			= array('value' => '');
$web['fields']['office_location']	= array('value' => '');

$web['tbl'] = new table($web['table']);
if ( $web['id'] > 0 )
	$web['tbl']->load($web['id']);

if ( $web['task'] == 'save' )
{
	$web['err'] = '';
	foreach($web['fields'] as $key => $value)
		$web['tbl']->setValue($key, $request->get($key, ''));
	$tbl = new table($web['table']);
	$found = $tbl->find('email', $request->get('email', ''));
	if ( $found && $web['id'] != $tbl->getValue('id') )
		$web['err'] = 'User is already exists with same email address';
	unset($tbl);

	if ( $web['err'] == '' )
	{
		$pwd = $request->get('pwd', '');
		if ( $pwd != '' )
			$web['tbl']->setValue('pwd', md5($pwd));
		if ( $web['id'] == 0 )
			$web['tbl']->setValue('userrole', 'u');
		$web['tbl']->setValue('company_id', $session->get('company_id'));
		$web['tbl']->save();
		$act = ($web['id'] == 0)?'ADD':'EDIT';
		add_log_history($act, 'USER', $session->get('uid'), $session->get('userrole'));
	}
}

foreach($web['fields'] as $key => $value)
	$web['fields'][$key]['value'] = $web['tbl']->getValue($key);
unset($web['tbl']);
//echo $web['fields']['user_group_id']['value'];
$conditions[0] = array('type' => 'WHERE', 'field' => 'company_id', 'value' => $session->get('company_id'));
$web['user_groups'] = getdropdown('user_group', 'id', 'user_group_name', $web['fields']['user_group_id']['value'], $conditions);

echo $twig->render('front-user.html', array('web' => $web));
?>
