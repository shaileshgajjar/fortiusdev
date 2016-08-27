<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
ini_set('display_errors', 1); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$asrs 	= array();
$cid 	= $request->get('cid',0);
$uid 	= $request->get('uid',0); // logged in  user id
$role 	= $request->get('role',0); // logged in  user role
$pid 	= $request->get('pid',0); // procedure id if provided
$tbl 	= new table('customer_assessor');
$tbl->cols('t1.*');
$tbl->cols(" CONCAT(u.first_name, ' ', u.last_name) AS assessor ");
$tbl->join('users', 'u.id', 't1.assessor_id', 'u');
$tbl->condition('WHERE', 't1.customer_id', $cid);

$rows = $tbl->getList();
$data = array();
if($rows){
		$users .= '<div>';
		$users .= '<select required id="toid" name="toid" class="form-control" onchange="javascript: getroomchats('.$cid.','.$uid.',\''.$role.'\',0,this.value, '.$pid.')">';
		$users .='<option value="0">All assessors</option>';
		foreach ( $rows as $row ){
			$asrs[] = $row['assessor_id'];
			$users .='<option value="'.$row['assessor_id'].'">'.$row['assessor'].'</option>';
			$userIds[] = $row['userid'];
			$groupId = $row['user_group_id'];
		}
		$users .= '</select>';
	$users .= '</div> <br>';	
}	
echo json_encode(array('ids'=>$asrs, 'data'=>$users));
exit;
?>