<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$tbl_id 		= $request->get('tbl_id','');
$web['rand_id'] = 'add'.rand(5, 15);
echo $twig->render('_reviewed-sample-subset-row.html', array('web' => $web));
?>