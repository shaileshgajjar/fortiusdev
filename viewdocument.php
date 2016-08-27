<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
	
$web['document'] = $request->get('q', '');
$params = explode("&", base64_decode($web['document']));
$doc = explode("=", $params[0]);
$cid = explode("=", $params[1]);
$file = APP_PATH.'/uploads/documents/'.$cid[1].'/'.$doc[1];
if ( !file_exists($file) )
{
	echo "File does not exists.";
	exit;
}
$quoted = sprintf('"%s"', addcslashes(basename($file), '"\\'));
$size   = filesize($file);
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . $quoted); 
header('Content-Transfer-Encoding: binary');
header('Connection: Keep-Alive');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . $size);
readfile ($file);
?>