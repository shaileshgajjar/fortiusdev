<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$web['requirements_id']	= $request->get('requirements_id', 0);
$web['merchant_id']		= $request->get('merchant_id', 0);
$web['roc_saq']			= $session->get('roc_saq');
$web['company_id']		= $session->get('company_id');
$roc_saq = ($web['roc_saq'] == 'roc') ? '' : 'saq_';

$web['rows'] = array();
$web['reports'] = array();
getUserData();

echo $twig->render('getcontentuser.html', array('web' => $web));
?>