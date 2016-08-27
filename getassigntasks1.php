<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

if ( $session->get('roc_saq') == 'roc' )
	$roc_saq		= '';
else
	$roc_saq		= $session->get('roc_saq').'_';
$web['company_id']		= $_SESSION['company_id'];
$web['requirements_id']	= $request->get('requirements_id', 0);
$web['id']				= $request->get('id', 0);
$web['source']			= $request->get('source', '');

$web['rows'] = array();
getAssignTask();
	
echo $twig->render('getassigntasks.html', array('web' => $web));
