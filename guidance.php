<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$pid		= $request->get('pid', '');
$tbl = new table('procedure');
$tbl->cols('number');
$tbl->cols('guidance');
$tbl->condition('WHERE', 'id',  $pid);
$rw1 = $tbl->getList();
if ( $rw1[0] )
	$guidance = '<div id="proc-title" class="number alert alert-info" style="min-height:16px; padding:4px;">'.  $rw1[0]['number'] .'</div>' . $rw1[0]['guidance'];

echo $guidance;
?>