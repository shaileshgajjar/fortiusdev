<?php
require(dirname(__FILE__).'/../config/config.new.php');
$web['pagetitle'] = 'Welcome to Security System - Login';
$web['err'] = $request->get('err', '');
if ( $web['err'] == '3' )
	$web['err'] = 'You required lgoin to access';
$task	= $request->get('task', '');
$email	= $request->get('email', '');
$pwd	= $request->get('pwd', '');
if ( $task == 'login' )
{
	$web['err'] = 'Invalid username or password';
	$user = new table('users');
	$user->find('email', $email);
	if ( md5($pwd) == $user->getValue('pwd') )
	{
		$session->set('uid', $user->getValue('id'));
		if ( $user->getValue('username') == '' )
			$session->set('username', $user->getValue('first_name').' '.$user->getValue('last_name'));
		else
			$session->set('username', $user->getValue('username'));
		$session->set('userrole', $user->getValue('userrole'));
		
		add_log_history('', 'LOGIN', $user->getValue('id'),$user->getValue('userrole'));
		header("Location: dashboard.php");
		exit;
	}
	else
	{
		add_log_history('', '', 0, 'a', true, $email);
	}
}
$web['page'] = 'login';
echo $twig->render('index.html', array('web' => $web));
?>
