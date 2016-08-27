<?php
$role = array('c', 'u', 'q', 's');
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pg']			= $request->get('pg', 1);
$web['total_pages']	= 1;

$web['listscript']	= 'bulk-upload.php';	
$web['pagetitle']	= 'Security System - Bulk Upload';
$web['page']		= 'bulkupload';
$web['title']		= 'Bulk Upload';

if ( $session->get('userrole') == 's' )
{
	$conditions[]		= array('type' => 'WHERE', 'field' => 'ca.assessor_id', 'value' => $session->get('uid'));
	$joins[]			= array('table' => 'customer_assessor', 'field1' => 'ca.customer_id', 'field2' => 't1.id', 'alias' => 'ca', 'join_type' => 'JOIN');
	$web['companies']	= getdropdown('customer', 't1.id', 'company_name', 0, $conditions, $joins);
}

echo $twig->render('front-bulk-upload.html', array('web' => $web));
?>
