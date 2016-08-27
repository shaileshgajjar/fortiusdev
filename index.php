<?php
require(dirname(__FILE__).'/config/config.new.php');
$web['pagetitle'] = 'Welcome to Security System - Login';
$web['err'] = $request->get('err', '');
if ( $web['err'] == '3' )
	$web['err'] = 'You required login to access';
$task	= $request->get('task', '');
$uid	= $request->get('uid', '');
$email	= $request->get('email', '');
$pwd	= $request->get('pwd', '');
if ( $task == 'login' )
{
	$user = new table('users');
	$user->find('email', $email);
	if ( md5($pwd) == $user->getValue('pwd') && $user->getValue('userrole') != 'a' )
	{
		
		$session->set('uid', $user->getValue('id'));
		if ( $user->getValue('username') == '' )
			$session->set('username', $user->getValue('first_name').' '.$user->getValue('last_name'));
		else
			$session->set('username', $user->getValue('username'));
		$session->set('userrole', $user->getValue('userrole'));
		$session->set('user_group_id', $user->getValue('user_group_id'));
		$session->set('company_id', 0);
		$session->set('parent_id', 0);
		$session->set('company_name', '');
		$session->set('merchant_type', '');
		$session->set('assessor_id', 0);
		$session->set('roc_saq', '');
		$session->set('company_logo', '');
		$tbl = new table('customer');
		$tbl->cols('t1.*');
		$tbl->cols('m.merchant_type');
		$tbl->cols('m.roc_saq');
		$tbl->join('merchant_type', 't1.merchant_type_id', 'm.id', 'm');
		$tbl->condition('WHERE', 't1.id', $user->getValue('company_id'));
		$rows = $tbl->getList();
		if ( count($rows) > 0 )
		{
			$session->set('company_id', $rows[0]['id']);
			$session->set('company_name', $rows[0]['company_name']);
			$session->set('merchant_type', $rows[0]['merchant_type']);
			$session->set('roc_saq', $rows[0]['roc_saq']);
			$session->set('parent_id', $rows[0]['parent_id']);
			$session->set('compliance_due_date', $rows[0]['compliance_due_date']);
			if ( $session->get('userrole') == 'c' || $session->get('userrole') == 'u' )
			{
				if ( file_exists(__DIR__.'/uploads/logos/'.$rows[0]['company_logo']) )
					$session->set('company_logo',  $rows[0]['company_logo']);
			}
		}
		unset($tbl);
		add_log_history('', 'LOGIN', $user->getValue('id'),$user->getValue('userrole'));
		header("Location: dashboard.php");
		exit;
	}
	else
	{
		add_log_history('', '', 0, 'a', true, $email);
	}
	unset($user);
}

$web['page'] = 'login';
echo $twig->render('front-index.html', array('web' => $web));
?>
