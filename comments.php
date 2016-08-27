<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$company_id	= $request->get('company_id', '');
$uid 		= $_SESSION['uid'];
$pid			= $request->get('pid', '');
$doc_id		= $request->get('doc_id', 0);
$to_user_id		= $request->get('to_user_id', 0);

$commented_by		= $request->get('commented_by', '');
$commented_to		= $request->get('commented_to', '');
$AND_COMMENTED_TO = '';

$tbl = new table('procedure_comment');
$tbl->cols('t1.id');
$tbl->cols('t1.comments');
$tbl->cols('t1.user_id');
$tbl->cols('u.id AS company_user_id');
$username = " CONCAT(u.first_name,' ',u.last_name) AS username ";
$tbl->cols($username);
$tbl->cols('t1.comment_date');
$qsa_username = " CONCAT(qsa_u.first_name,' ',qsa_u.last_name) AS qsa_username ";
$tbl->cols($qsa_username);
$qa_username = " CONCAT(qa_u.first_name,' ',qa_u.last_name) AS qa_username ";
$tbl->cols($qa_username);
$tbl->cols('c.qsa_id');
$tbl->cols('c.qa_id');
$tbl->join('users', 'u.id', 't1.user_id', 'u');
$tbl->join('customer', 'c.id', $company_id, 'c');
$tbl->join('users', 'qsa_u.id', 'c.qsa_id', 'qsa_u');
$tbl->join('users', 'qa_u.id', 'c.qa_id', 'qa_u');
$tbl->condition('WHERE', 't1.company_id', $company_id);
$tbl->condition('AND', 't1.procedure_id', $pid);

if( $commented_by == 'a')
{
	$tbl->condition('AND', 't1.comment_type', '0');
	$tbl->condition('AND', '( t1.commented_to ', $commented_to);
	$tbl->condition('AND', ' t1.commented_by ', $commented_by);
	$tbl->condition('OR', ' t1.commented_to ', $commented_to);
	$tbl->condition('AND', ' t1.commented_by ', $commented_to.')');
}	
if ( $commented_by == 'c')
{
	$tbl->condition('AND', 't1.comment_type', '0');
	$tbl->condition('AND', '( t1.commented_to ', $commented_by);
	$tbl->condition('AND', ' t1.commented_by ',  's');
	$tbl->condition('OR', ' t1.commented_to ',  's' );
	$tbl->condition('AND', ' t1.commented_by ', $commented_by.')');
}
if ( $commented_by == 'u' )
{
	
	$tbl->condition('AND', ' ( t1.user_id ',  $uid );
	$tbl->condition('OR', '  t1.to_user_id ',   $uid . ')' );


}
if($commented_by == 'q' )
{
		$tbl->condition('AND', ' ( t1.user_id ',  $uid );
		$tbl->condition('OR', '  t1.to_user_id ',   $uid . ')' );
		$tbl->condition('AND', 't1.comment_type', 0);
}
if($commented_by == 's' )
{
	if($commented_to == 'u' )
	{
		$tbl->condition('AND', '( t1.commented_to ', 'u');
		$tbl->condition('AND', ' t1.commented_by ', 's' );
		$tbl->condition('OR', ' t1.commented_to ', 's');
		$tbl->condition('AND', ' t1.commented_by ', 'u )');


	}
	if($commented_to == 'q' )
	{
		
		$tbl->condition('AND', ' ( t1.user_id ',  $uid );
		$tbl->condition('AND', '  t1.to_user_id ',   $to_user_id . ')' );
		$tbl->condition('OR', ' ( t1.user_id ',  $to_user_id );
		$tbl->condition('AND', '  t1.to_user_id ',   $uid . ')' );
		$tbl->condition('AND', 't1.comment_type', '0' );
	}	
}	
$tbl->orderby('id', 'DESC');	
$html = ''; 
$title = '';
$rows = $tbl->getList();
unset($tbl);
$users = '';
if($session->get('userrole') == 's' && $commented_to == 'u' )
{
	$tbl = new table('document_user_group');
	$tbl->cols('t1.document_id');
	$tbl->cols('t1.user_group_id');
	$tbl->cols('u.id AS userid');
	$tbl->cols(" CONCAT(u.first_name, ' ', u.last_name) AS username ");
	$tbl->join('users', 'u.user_group_id', 't1.user_group_id', 'u');
	$tbl->condition('WHERE', 't1.document_id', $doc_id);
	$tbl->condition('AND', 't1.company_id', $company_id);
	$tbl->condition('AND', 'u.userrole', 'u');
	$usersList = $tbl->getList();
	unset($tbl);
	$userIds = array();
	$userrole = $session->get('userrole');
	$groupId = $usersList[0]['user_group_id'];
	$users .= '<div>';
		$users .= '<select required id="toid" name="toid" class="form-control" onchange="javascript: getroomchats('.$company_id.','.$uid.',\''.$userrole.'\','.$groupId.',this.value, '.$pid.')">';
		$users .='<option value="0">All users of this task</option>';
		foreach ( $usersList as $row ){
			$users .='<option value="'.$row['userid'].'">'.$row['username'].'</option>';
			$userIds[] = $row['userid'];
			$groupId = $row['user_group_id'];
		}
		$users .= '</select>';
	$users .= '</div> <br>';
}
if($commented_to == 'q' || $commented_to == 's')
	$users .='<input type="hidden" id="to_user_id" name="to_user_id" value="'.$to_user_id.'" >';
	$users .='<input type="hidden" id="group_id" name="group_id" value="'.$groupId.'" >';
$html .= $users;
/*$html .= '<div style="padding:5px !important; margin-top:10px;">';
	$html .='<textarea name="comment" class="form-control" rows="5" id="comment"></textarea>';
$html .= '</div>';
$html .='<div style="height:200px; overflow-y:scroll; margin-top:10px; padding:5px;" id="individ-thread">';
foreach( $rows as $rw1)
{
	$title = ($rw1['user_id'] == $uid)? 'Me':$rw1['username'];
	$html .= '<p class="alert-info" style="padding:3px;"><b>'.$title.'</b> : '.$rw1['comment_date'].'</p>';
	$html .= '<p>'.$rw1['comments'].'</p>';
}
$html .= '</div>';
*/
$return = array('groupId'=> $groupId,'content' => $html, 'userIds' => $userIds);
echo json_encode($return);
exit;
?>