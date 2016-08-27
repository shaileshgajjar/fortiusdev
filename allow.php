<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$task = $request->get('task', '');
$id = $request->get('id', '');
$roc_saq = $request->get('roc_saq', '');
$tbl = new table($roc_saq.'procedure');
if ( $task == 'usercan' )
{
	$fields['usercan']['value'] = $request->get('setto', '');
	$tbl->load($id);
	$tbl->savedata($fields);
}

if ( $task == 'allowdoc' )
{
	$fields['allowdoc']['value'] = $request->get('setto', '');
	$tbl->load($id);
	$tbl->savedata($fields);

}
?>