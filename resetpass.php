<?php
require(dirname(__FILE__).'/config/config.new.php');
$web['pagetitle'] = 'Welcome to Security System - Reset Password';
$web['q'] = $request->get('q', '');
$web['err'] = $request->get('err', '');

$task	= $request->get('task', '');
$pwd	= $request->get('pwd', '');

$web['err'] = '';
$tbl = new table('users');
$rw = $tbl->find('api', $web['q']);
if ( !$rw )
{
	$web['err'] = 'Invalid access';
}
$web['id'] = $rw['id'];

if ( $task == 'reset' )
{
	$fields = array();
	$fields['pwd']['value'] = md5($pwd);
	$fields['api']['value'] = '';
	$tbl->load($web['id']);
	$tbl->savedata($fields);
	$web['err'] = 'Password has been reset.';
}
echo $twig->render('front-resetpass.html', array('web' => $web));
?>
