<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE); 
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$web['pid']	= $request->get('pid', 0);
$web['merchant_id']		= $request->get('merchant_id', 0);
$web['roc_saq']		= $request->get('roc_saq', 0);
$web['company_id']		= $request->get('company_id', 0);
$docid				= $request->get('docid', 0);
$roc_saq = ($web['roc_saq'] == 'roc') ? '' : 'saq_';
$tbl = new table('document');
$tbl->cols('p.requirements_id');
$tbl->cols('p.sub_requirements_id');
$tbl->cols('p.number');
$tbl->cols('p.title AS ptitle');
$tbl->cols('p.priority');
$tbl->cols('c.compliance_due_date');
$tbl->cols('t1.user_id');
$tbl->cols('t1.response');
$tbl->cols('t1.procedure_id');
$tbl->cols('t1.inplace');
$tbl->cols('t1.id AS doc_id');
$tbl->cols('t1.locked');
$tbl->cols('t1.completion_date');
$tbl->cols('t1.updated_on');
$tbl->cols('t1.reason_of_failure');
$tbl->join($web['version'].'procedure', 'p.id', 't1.procedure_id', 'p');
$tbl->join('customer', 'c.id', 't1.company_id', 'c');
$tbl->join($web['version'].'sub_requirements', 'sr.id', 't1.sub_requirements_id', 'sr');
//$tbl->condition('WHERE', 'p.requirements_id', $web['requirements_id']);
$tbl->condition('WHERE', 't1.company_id',$web['company_id']);
$tbl->condition('AND', 't1.procedure_id',$web['pid']);
$tbl->orderby('p.id');
$failed_controls = $tbl->getList();
unset($tbl);
$bgclass = 'alert-danger';
$html = '';
$users = '';
$_html = '';
foreach( $failed_controls as $row)
{ 
	$tbl = new table('document_user_group');
	$tbl->cols('t1.document_id');
	$tbl->cols('t1.user_group_id');
	$tbl->cols('u.id AS userid');
	$tbl->cols("CONCAT(u.first_name, ' ', u.last_name) AS username");
	$tbl->join('users', 'u.user_group_id', 't1.user_group_id', 'u');
	$tbl->condition('WHERE', 't1.document_id', $docid);
	$tbl->condition('AND', 't1.company_id', $web['company_id']);
	$usersList = $tbl->getList();
	unset($tbl);
	$userrole = $session->get('userrole');
	if(!empty($usersList))
	{
		$users .= '<div class="form-group pull-left">';
			$users .= '<div class="alert">';
				$users .= '<div class="input-group">';
					$users .= 'Assign to : <select required id="to_user_id" name="to_user_id" class="form-input" onchange="">';
						$users .='<option value="0">Select user</option>';
						foreach ( $usersList as $rw )
						{
							$selected = ($rw['userid'] == $row['user_id'])?"selected":"";
							$users .='<option value="'.$rw['userid'].'" '.$selected .'>'.$rw['username'].'</option>';
						}	
					$users .= '</select>';
			$users .= '</div>';
			$users .= '</div>';
		$users .= '</div><br><br>';		
	}	
	$tbl = new table('procedure_comment');
	$tbl->cols('t1.comments');
	$tbl->cols('t1.comment_date');
	$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
	$tbl->condition('AND', 't1.procedure_id', $web['pid']);
	//$tbl->condition('AND', 't1.failed_control', 1);
	$tbl->condition('AND', 't1.comment_type', '3');
	$tbl->orderby('t1.id', 'DESC');
	$rows = $tbl->getList();
	unset($tbl);
	$reason = ($row['reason_of_failure'] != '')?$row['reason_of_failure']:' No reason specified yet';
	$html .= ' <div class=" number alert '.$bgclass.'"> '.$row['number']. ' '. $row['ptitle'] .'</div>';
	if($row['updated_on'] != '0000-00-00' )
		$html .= '<p class="alert-info" style="padding:3px;float:right;"><small><b>Updated on</b> : '.$row['updated_on'].'</small></p>';
	$html .= '<p class="alert-info" style="padding:3px;"><b>Reason: </b> '.$reason.'</p>';
		
	$html .= '<p class="alert-success " style="padding:3px;"><b>Compliance Due Date: </b> '.$row['compliance_due_date'].'</p>';
	$html .= $users;
	$html .= '<input type="hidden" name="c_due_dt" id="c_due_dt" value="'.$lib->format_date($row['compliance_due_date'],'Y-m-d').'" >';
	$compldt = ($row['completion_date'] != '0000-00-00') ? date('Y-m-d', strtotime($row['completion_date'])) : date('Y-m-d');
	$html .= '<input type="hidden" name="cdate" id="cdate" value="'.$compldt.'" >';	
	$html .= '<input type="hidden" name="pid" id="pid" value="'.$web['pid'].'" >';
	$html .= '<input type="hidden" name="docid" id="docid" value="'.$docid.'" >';
	foreach( $rows as $rw1)
	{
		if($rw1['comments'] != '')
		{
			$_html .= '<p class="alert-info" style="padding:3px;"><b>Date: </b> '.$rw1['comment_date'].'</p>';
			$_html .= '<p>'.$rw1['comments'].'</p>';
		}	
	}
	if($session->get('userrole') == 'c' )
	{
		$html .= '<span class="pull-right text-success  glyphicon glyphicon-pencil" data-toggle="collapse" title="Click to put  note to '.$row['number']. '" data-target="#section_c" style="cursor:pointer"></span>';
	}

	$html .= '<div style="clear:both;"></div>';
	$html .= ' <div id="section_c" class="collapse">';
	$html .= ' <textarea name="proc_note" class="form-control" rows="" id="proc_note" placeholder="Write comment here"></textarea><br>';
	$html .= ' </div>';
	$html .= $_html;
}
echo $html;								

?>