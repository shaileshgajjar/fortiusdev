<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
	
$company_id 	= $request->get('company_id', 0);
$cno 	= $request->get('cno', 0);

$tbl = new table('document');
$tbl->cols('t1.updated_on');
$tbl->cols('t1.reason_of_failure');
$tbl->cols('t1.completion_date');
$tbl->join($web['version'].'procedure', 'p.id', 't1.procedure_id', 'p');
$tbl->join($web['version'].'sub_requirements', 'sr.id', 't1.sub_requirements_id', 'sr');
$tbl->condition('WHERE', 't1.company_id',$company_id );
$tbl->condition('AND', 't1.procedure_id',$cno);
$fc_data = $tbl->getList();
$updated_on 		= $fc_data[0]['updated_on'];
$reason_of_failure 	= $fc_data[0]['reason_of_failure'];
$completion_date 	= $fc_data[0]['completion_date'];
unset($tbl);
$html = '';
if($reason_of_failure!= '')
{
	$html .= '<br><p class="alert-info" style="padding:3px;float:right;"><small><b>Updated on</b> : '.$updated_on.'</small></p>';
	$html .= '<p class="alert-info" style="padding:3px;"><b>Reason: </b> '.$reason_of_failure.'</p>';
	$html .= '<p class="alert-info" style="padding:3px;"><b>Completion Data: </b> '.$completion_date.'</p>';
	
}
echo $html;								

?>