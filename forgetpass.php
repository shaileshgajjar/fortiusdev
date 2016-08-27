<?php
require(dirname(__FILE__).'/config/config.new.php');
$web['pagetitle'] = 'Welcome to Security System - Login';
$web['err'] = $request->get('err', '');

$task	= $request->get('task', '');
$email	= $request->get('email', '');
$web['err'] = '';
if ( $task == 'send' )
{
	$tbl = new table('users');
	$tbl->condition('WHERE', 'email', $email);
	$tbl->getList();
	
	
	if ( $rw = $tbl->find('email', $email) )
	{
		$fields['api']['value'] = md5('forgetpass'.$email);
		$tbl->condition('WHERE', 'email', $email);
		$tbl->savedata($fields);
		$fromemail = "support@pcicomply.com";
		$subj = 'PCI Comply - Forget password';
		$toemail = $request->get('email', '');
		$f_path =  APP_PATH .'emailtemplates/forgetpass.html';
		
		$url = APP_PATH .'uploads/diagrams/';
		$img = 'images_1.jpg';
		$test = file_put_contents($img, file_get_contents($url));
		echo $test;exit;
		$fldvalue['first_name'] = $tbl->getValue('first_name');
		$fldvalue['last_name'] = $tbl->getValue('last_name');
		$fldvalue['link'] = '<a href="http://'.$_SERVER['HTTP_HOST'].'/resetpass.php?q='.$fields['api']['value'].'">Reset password link</a>';
		$lib->send_mail($f_path, $toemail, $fromemail, $subj, '', $fldvalue);
		$web['err'] = 'Email sent to reset password.';
	}
	else
		$web['err'] = 'Email address not found.';
	unset($tbl);
}
$web['page'] = 'forgetpass';
echo $twig->render('front-index.html', array('web' => $web));
?>
