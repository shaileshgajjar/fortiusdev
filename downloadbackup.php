<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
	
$web['q'] 	= $request->get('q', '');
$params 		= explode("&", base64_decode($web['q']));
$cdata 		= explode("=", $params[0]);
$cid 		= $cdata[1];
$cdata2 		= explode("=", $params[1]);
$secure_key 	= $cdata2[1];

$tbl= new table('customer');
$tbl->load($cid);
$stored_key = $tbl->getValue('secure_key');
if( $stored_key == $secure_key)
{
	$tbl= new table('customer');
	$tbl->load($cid);
	$tbl->setValue('secure_key', '');
	$tbl->save();
	$rootpath = $_SERVER["DOCUMENT_ROOT"];
	$rootpath = $_SERVER["DOCUMENT_ROOT"];
	$dest 	= $rootpath.'/uploads/backup/'.$cid.'.zip';
	header('Content-disposition: attachment; filename='.$cid.'.zip');
	header('Content-type: application/zip');
	readfile($dest);
}
else
{
	echo "Invalid Access";
}
?>