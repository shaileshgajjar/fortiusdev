<?php
//error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
error_reporting(0);
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$did	= $request->get('did', 0);
$cid	= $request->get('cid', 0);
$tbl = new table('network_diagram');
$tbl->find(array('id', 'company_id'), array($did, $cid));
$diagram = $tbl->getValue('diagram_path');
$path = '/uploads/diagrams/'.$diagram;

if ( file_exists($path) )
	unlink($path);
	
$params = array($did, $cid);
$sql = "DELETE FROM ".$tbl->getPrefix()."network_diagram WHERE id = ? AND company_id=?";
$tbl->execute($sql, $params);	
add_log_history('DEL', 'DOC', $session->get('uid'), $session->get('userrole') );
?>