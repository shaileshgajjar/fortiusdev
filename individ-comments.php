<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$company_id	= $request->get('company_id', '');
$user_id		= $session->get('uid');
$to_user_id	= $request->get('to_user_id', 0);
$c_proc_id	= $request->get('c_proc_id', 0);
$commented_by		= $request->get('commented_by', '');
$commented_to		= $request->get('commented_to', '');

$tbl = new table('procedure_comment');
$tbl->cols('t1.comments');
$tbl->cols('t1.comment_date');
$tbl->cols('t1.user_id');
$username = " CONCAT(u.first_name,' ',u.last_name) AS username ";
$tbl->cols($username);
$tbl->join('users', 'u.id', 't1.user_id', 'u');
$tbl->condition('WHERE', 't1.company_id', $company_id);
if($session->get('userrole') == 's')
{
	if($to_user_id != 0)
	{
		$tbl->condition('AND', 't1.comment_type', 2);
		$tbl->condition('AND', '  (t1.to_user_id ', $to_user_id);
		$tbl->condition('OR', ' t1.user_id ', $to_user_id .')');
		
	}	
	else
	{
		$tbl->condition('AND', '( t1.comment_type', 2 );
		$tbl->condition('OR', ' t1.comment_type', '0 )');
		$tbl->condition('AND', '( t1.commented_to ', $commented_by);
		$tbl->condition('OR', ' t1.commented_by ', $commented_by.')');
		$tbl->condition('AND', 't1.procedure_id', $c_proc_id);
	}
	
}
elseif($session->get('userrole') == 'c')
{
	$tbl->condition('AND', 't1.comment_type', 1);
	$tbl->condition('AND', '  (t1.to_user_id ', $to_user_id);
	$tbl->condition('OR', ' t1.user_id ', $to_user_id .')');
}
elseif($session->get('userrole') == 'u')
{
	$tbl->condition('AND', 't1.comment_type', 2);
	$tbl->condition('AND', '  (t1.to_user_id ', $user_id);
	$tbl->condition('OR', ' t1.user_id ', $user_id .')');
}

$tbl->orderby('t1.id', 'DESC');
$rows = $tbl->getList();
$html = ''; 
foreach( $rows as $rw1)
{ 
	$title = ($rw1['user_id'] == $user_id)? 'Me':$rw1['username'];
	$html .= '<p class="alert-info" style="padding:3px;"><b>'.$title.'</b> : '.$rw1['comment_date'].'</p>';
	$html .= '<p>'.$rw1['comments'].'</p>';
}
echo $html;
?>