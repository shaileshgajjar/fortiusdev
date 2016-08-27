<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$from_id	= $request->get('from_id', '');
$company_id	= $request->get('company_id', '');

$tbl = new table('document_filter');
$tbl->delete(array('company_id', 'user_id'), array($company_id, $session->get('uid')));
$tbl->condition('WHERE', 'company_id', $from_id);
$rows = $tbl->getList();
foreach($rows as $row)
{
	$tbl->setValue('id', 0);
	$tbl->setValue('company_id', $company_id);
	$tbl->setValue('filter_id', $row['filter_id']);
	$tbl->setValue('document_id', $row['document_id']);
	$tbl->setValue('user_id', $session->get('uid'));
	$tbl->save();
}
?>