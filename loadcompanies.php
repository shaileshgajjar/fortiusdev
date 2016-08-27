<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$id	= $request->get('id', '');

$conditions[] = array('type' => 'WHERE', 'field' => 'id', 'value' => $id, 'condition_type' => '!=');
echo '<option value="0">Select Company</option>';
echo getdropdown('customer', 'id', "company_name", 0, $conditions);
?>