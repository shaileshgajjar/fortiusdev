<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['addbtnshow']				= '0';
$web['userrole']				= array('a' => 'Admin', 'u' => 'User', 'c' => 'Company', 's' => 'QSA', 'q' => 'QA', 'i' => 'ISA');
$web['pagetitle']				= $web['company'].' - login_history';
$web['table']					= 'login_history';
$web['page']					= 'masters';
$web['subpage']					= 'login_history';
$web['editscript']				= '';
$web['listscript']				= 'login_history.php';
$_SESSION['backscript']			= '';

$web['uid'] 	= $session->get('uid');
$web['search']['comments']	    	= 'Comments';
$web['search']['last_login']	= 'Last Login';
$web['search']['login_from']	= 'Login From';

$web['title']	= 'Login History';
$web['id']	= $request->get('id', '');
$web['task']	= $request->get('task', '');
$web['err']	= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'user_id ');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'last_login');
$web['ot']	= $request->get('ot', 'desc');

if ( $web['task'] == 'delete' )
{
	/* $removeid	= $request->get('removeid', '');
	$sql = "SELECT id FROM ".$oApp->prefix.$web['table']." WHERE id IN (".implode(",", $removeid).")";
	$rs = $oApp->db_query($sql);
	while ( $rw = $oApp->db_assoc($rs) )
	{
		$sql = "DELETE FROM ".$oApp->prefix.$web['table']." WHERE id = '".$rw['id']."'";
		$oApp->db_execute($sql);
		$sql = "DELETE FROM ".$oApp->prefix."users WHERE assessor_id = '".$rw['id']."'";
		$oApp->db_execute($sql);
	}*/
}

$web['rows'] = array();
$tbl = new table($web['table']);
$username = " CONCAT(u.first_name, ' ', u.last_name) AS username ";
$tbl->cols('t1.*');
$tbl->cols($username);
$tbl->cols('u.email');
$tbl->join('users', 'u.id', 't1.user_id', 'u');
$tbl->condition('WHERE', 't1.user_id', $web['uid']);
if ( $web['sk'] != "" )
	$tbl->condition('AND', $web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);	
$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);
echo $twig->render('front-login_history.html', array('web' => $web));
?>
