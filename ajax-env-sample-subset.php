<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$web['tbl_id'] 			= $request->get('tbl_id','');
$web['parent_set'] 		= $request->get('parent_set','');

echo $twig->render('_reviewed-sample-subset.html', array('web' => $web));	
?>