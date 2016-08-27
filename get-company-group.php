<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$conditions[0] = array('type' => 'WHERE', 'field' => 'company_id', 'value' => $session->get('company_id'));
$html = getdropdown('user_group', 'id', 'user_group_name', $session->get('user_group_id'), $conditions);
echo $html;
?>