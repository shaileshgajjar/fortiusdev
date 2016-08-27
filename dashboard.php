<?php
$role = array('c', 'u', 'q', 's');
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
	
$web['listscript']		= 'dashboard.php';	
$web['pagetitle']		= 'Security System - Dashboard';
$web['page']			= 'dashboard';
$web['title']			= 'Dashboard';
$web['customers']		= array();
$web['userrole']		= $session->get('userrole');
$web['uid']			= $session->get('uid');
$web['company_id']		= $session->get('company_id');
$web['company_name']	= $session->get('company_name');
$web['merchant_type']	= $session->get('merchant_type');
$web['username']		= $session->get('username');

$web['ipt']  	= array();
$web['uct']  	= array();
$web['ft']  	= array();
$web['odt']  	= array();

if ( $session->get('userrole') == 'c' || $session->get('userrole')== 'u' )
{
	$roc_saq 		= ($session->get('roc_saq') == 'roc') ? '' : 'saq_';
	$tbl = new table('document');
	$tbl->cols('t1.inplace');
	$tbl->cols('t1.id AS docid');
	$tbl->cols('t1.requirements_id');
	$tbl->cols('t1.procedure_id');
	$tbl->cols('t1.completion_date');
	$tbl->cols('t1.user_id');
	$tbl->cols('r.id');
	$tbl->cols('p.title');
	$tbl->cols('p.number');
	$tbl->cols('p.priority');
	$tbl->join($web['version'].$roc_saq.'procedure', 'p.id', 't1.procedure_id', 'p', 'JOIN');
	$tbl->join($web['version'].$roc_saq.'requirements', 'r.id', 't1.requirements_id', 'r', 'JOIN');
	$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
	$tbl->cols('ug.user_group_name');
	$tbl->join('document_user_group', 'dug.document_id', 't1.id', 'dug', 'JOIN');
	$tbl->join('user_group', 'ug.id', 'dug.user_group_id', 'ug', 'JOIN');
	$rows = $tbl->getList();
	unset($tbl);
	$totayary = array('Y'=>0, 'N'=>0, 'C'=>0, 'NA'=>0, 'NT'=>0, 'severity'=>0, 'maxseverity'=>0);
	$web['controls'] = array();
	$web['failed'] = array();
	$web['fc'] = array();
	foreach ( $rows as $rw )
	{
		if ( !isset($web['controls'][$rw['requirements_id']]) )
			$web['controls'][$rw['requirements_id']] = array('Y'=>0, 'N'=>0, 'C'=>0, 'NA'=>0, 'NT'=>0, 'severity'=>0, 'maxseverity'=>0, 'total'=>0, 'percentage'=>0);
		$inplace = $rw['inplace'];
		if ( $inplace == '' )
			$inplace = 'NT';
		if ( $inplace == 'N' )	
		$web['failed'][$rw['requirements_id']]['procedure'][] = "'".$rw['procedure_id']."'";
		if ( $inplace == 'N' )	
		{
			$web['fc'][$rw['procedure_id']]['docid'] 	= $rw['docid'];
			$web['fc'][$rw['procedure_id']]['rid'] 		= $rw['requirements_id'];
			$web['fc'][$rw['procedure_id']]['number'] 	= $rw['number'];
			$web['fc'][$rw['procedure_id']]['title'] 	= $rw['title'];
			$web['fc'][$rw['procedure_id']]['cdate'] 	= $rw['completion_date'];
			$web['fc'][$rw['procedure_id']]['user_group_name'] 	= $rw['user_group_name'];
			$web['fc'][$rw['procedure_id']]['priority'] 	= $rw['priority'];
			$web['fc'][$rw['procedure_id']]['user_id'] 	= $rw['user_id'];
		}	
		$web['controls'][$rw['requirements_id']][$inplace]++;
		$web['controls'][$rw['requirements_id']]['total']++;
		$totayary[$inplace]++;
	}

	$web['total'] = $totayary;
	if ( $session->get('userrole') == 'c' )
	{
		// Compliance / Severity
		$s1 = array();
		$label = array();
		$ticks = array();
		foreach($web['controls'] as $k => $v)
		{
			if ( $v['total'] == 0 )
				$web['controls'][$k]['percentage'] = 'NA';
			else
				$web['controls'][$k]['percentage'] = round(($v['Y']+$v['C'])/$v['total']*100);
			$s1[] = $web['controls'][$k]['percentage'];
			//$label[] = "'".$web['controls'][$k]['percentage'].'%'."'";
			// haere we needed data in integer to use highcharts ui 
			$label[] = $web['controls'][$k]['percentage'];
			$ticks[] = "'".$k."'";
		}
		$web['s2'] = implode(', ', $s1);
		$web['label2'] = implode(', ', $label);
		$web['ticks2'] = implode(', ', $ticks);
		
		$tbl = new table('document');
		$tbl->cols('t1.inplace');
		$tbl->cols('p.requirements_id');
		$tbl->cols('p.sub_requirements_id');
		$tbl->cols('p.id AS pid');
		$tbl->cols('p.priority');
		$tbl->join($roc_saq.'procedure', 'p.id', 't1.procedure_id', 'p');
		$tbl->condition('WHERE', 't1.company_id', $session->get('company_id'));
		$tbl->orderby('p.requirements_id');
		$tbl->orderby('p.sub_requirements_id');
		$tbl->orderby('p.id');
		$reports = $tbl->getList();
		unset($tbl);
		// Audit Completion
		$total 		= 0; 
		$completed 	= 0;
		$rid 		= 0;
		$s1 		= array();
		$ticks 		= array();
		$label 		= array();
		foreach( $reports as $rw1 )
		{
			if ( $rid != $rw1['requirements_id'] )
			{
				if ( $rid > 0 )
				{
					$percentage = round($completed/$total*100);
					$s1[] = $percentage;
					$ticks[] = "'".$rid."'";
					$label[] = "'".$percentage."%'";
				}
				$rid = $rw1['requirements_id'];
				$total = 0; $completed = 0;
			}
			$total++;
			if ( $rw1['inplace'] != '' )
				$completed++;
		}

		if ( $rid > 0 )
		{
			$percentage = round($completed/$total*100);
			$s1[] = $percentage;
			//$ticks[] = "'".$rid."'";
			$ticks[] = $rid; // haere we needed data in integer to use highcharts ui 
			$label[] = "'".$percentage."%'";
		}
		$web['s1'] = implode(', ', $s1);
		$web['ticks'] = implode(', ', $ticks);
		$web['label'] = implode(', ', $label);
		
		// priority
		$totalary = array('p1' => array(0, 0), 'p2' => array(0, 0), 'p3' => array(0, 0), 'p4' => array(0, 0), 'p5' => array(0, 0), 'p6' => array(0, 0));
		foreach ( $reports as $rw )
		{
			if ( !isset($web['rows'][$rw['requirements_id']]) )
				$web['rows'][$rw['requirements_id']] = array('p1' => array(0, 0), 'p2' => array(0, 0), 'p3' => array(0, 0), 'p4' => array(0, 0), 'p5' => array(0, 0), 'p6' => array(0, 0));
			if ( $rw['inplace'] == 'Y' || $rw['inplace'] == 'C' )
			{
				$web['rows'][$rw['requirements_id']]['p'.$rw['priority']][0]++;
				$totalary['p'.$rw['priority']][0]++;
			}
			if ( $rw['inplace'] == 'Y' || $rw['inplace'] == 'C' || $rw['inplace'] == 'N' || $rw['inplace'] == 'NT' )
			{
				$web['rows'][$rw['requirements_id']]['p'.$rw['priority']][1]++;
				$totalary['p'.$rw['priority']][1]++;
			}
		}
		$web['tot'] = $totalary;
		$s1 = array();
		$label = array();
		$ticks = array();
		$web['pie'] = '';
		$web['pie_new'] = '';
		for($p=1; $p<7; $p++)
		{
			$web['percn']['p'.$p] = 'NA';
			if ( $web['tot']['p'.$p][1] > 0 )
			{
				$web['percn']['p'.$p] = round($web['tot']['p'.$p][0]/$web['tot']['p'.$p][1]*100);
				$s1[] = $web['percn']['p'.$p];
				$label[] = "'".$web['percn']['p'.$p]."%'";
				$ticks[] = "'".$p."'";
				if ( $web['pie'] != '' )
					$web['pie'] .= ', ';
					
				if ( $web['pie_new'] != '' )
					$web['pie_new'] .= ', ';	
				$web['pie'] .= "['&nbsp;&nbsp;#P".$p."&nbsp;&nbsp;', ".$web['percn']['p'.$p]."]";
				$web['pie_new'] .= "{name: ' #P".$p." ', y:".$web['percn']['p'.$p]."}";
			}
		}
		
		$web['s3'] = implode(', ', $s1);
		$web['label3'] = implode(', ', $label);
		$web['ticks3'] = implode(', ', $ticks);
		
		
	}
	if ( $session->get('userrole')== 'u' )
	{
		$web['cmpt'] 			= getCompanyWiseTasks('completed', $web['company_id']);
		$web['upcoming']['thisweek'] 	= getUserWiseTasks('upcoming', $web['uid'], $session->get('user_group_id'), $web['company_id'], 'thisweek');
		$web['upcoming']['nextweek']   = getUserWiseTasks('upcoming', $web['uid'], $session->get('user_group_id'), $web['company_id'], 'nextweek');
		$web['upcoming']['nextmonth']  = getUserWiseTasks('upcoming', $web['uid'], $session->get('user_group_id'), $web['company_id'], 'nextmonth');
		$web['failed'] 				= getUserWiseTasks('failed', $web['uid'], $session->get('user_group_id'), $web['company_id']);
		$web['overdue'] 			= getUserWiseTasks('overdue', $web['uid'], $session->get('user_group_id'), $web['company_id']);
		$web['upcoming']['total'] = count($web['upcoming']['thisweek'] ) + count($web['upcoming']['nextweek'] ) + count($web['upcoming']['nextmonth'] );
	}
	if ( $session->get('userrole')== 'c' )
	{
		$web['cmpt']	= getCompanyWiseTasks('completed', $web['company_id']);
		$web['ipt']		= getCompanyWiseTasks('inprocess', $web['company_id']);
		$web['uct']		= getCompanyWiseTasks('upcoming', $web['company_id']);
		$web['ft']		= getCompanyWiseTasks('failed', $web['company_id']);
		$web['od']		= getCompanyWiseTasks('overdue', $web['company_id']);
	}	
}

if ( $web['userrole'] == 's' || $web['userrole'] == 'q' )
{
	$tbl = new table('customer');
	$tbl->cols('t1.*');
	$tbl->cols('m.merchant_type');
	$tbl->cols('m.roc_saq');
	$tbl->cols("CONCAT(u.first_name, ' ', u.last_name) as username" );
	$tbl->cols('u.email');
	$tbl->cols('u.mobile');
	$tbl->cols("(SELECT COUNT(id) FROM document d WHERE d.company_id = t1.id) as total");
	$tbl->cols("(SELECT COUNT(id) FROM document d WHERE d.company_id = t1.id AND inplace <> '') as filled");
	$tbl->join('merchant_type', 'm.id', 't1.merchant_type_id', 'm');
	$tbl->join('users', 'u.company_id', 't1.id', 'u');
	if ( $web['userrole']== 's' )
		$tbl->join('customer_assessor', 'ca.customer_id', 't1.id AND ca.assessor_id = '.$web['uid'], 'ca', 'JOIN');
	if ( $web['userrole'] == 'q' )
		$tbl->condition("WHERE" , "t1.qa_id", $web['uid']);
	$tbl->condition('AND', 'u.userrole', 'c');
	$rows = $tbl->getList();
	unset($tbl);
	$no = 0;
	$web['customers'] 	= array();

	foreach( $rows as $rw )
	{
		$web['customers'][$no] = $rw;
		$web['customers'][$no]['compliance_due_date'] = $lib->format_date($rw['compliance_due_date'], 'd M Y');
		$web['customers'][$no]['values'] = '';
		$web['customers'][$no]['maps'] = '';
		$web['customers'][$no]['percentage'] = 0;
		if ( $rw['total'] > 0 )
			$web['customers'][$no]['percentage'] = round($rw['filled'] / $rw['total'] * 100);
		$web['customers'][$no]['class'] = '';
		if ( date('Ymd') > $lib->format_date($rw['compliance_due_date'], 'Ymd') )
			$web['customers'][$no]['class'] = ' class="danger"';
		if ( $web['customers'][$no]['percentage'] == 100 )
			$web['customers'][$no]['class'] = ' class="success"';
		
		$web['customers'][$no]['filled'] = $rw['filled'];		
		$web['ipt'][$rw['id']]	= getQaQsaTasks('inprocess', $web['userrole'], $web['uid'], $rw['id']);
		$web['uct'][$rw['id']]	= getQaQsaTasks('upcoming', $web['userrole'], $web['uid'], $rw['id']);
		$web['ft'][$rw['id']] 	= getQaQsaTasks('failed', $web['userrole'], $web['uid'], $rw['id']);
		$web['odt'][$rw['id']] 	= getQaQsaTasks('overdue', $web['userrole'], $web['uid'], $rw['id']);	
		
		$no++;
	}
}

$web['report'] = array();
if( isset($web['completed']) && count($web['completed']) > 0) 	$web['report']['completed'] = 1; 	else $web['report']['completed'] = 0;
if( isset($web['inprocess']) && count($web['inprocess']) > 0) 	$web['report']['inprocess'] = 1; 	else $web['report']['inprocess'] = 0;
if( isset($web['upcoming']) && count($web['upcoming']) > 0) 	$web['report']['upcoming']= 1; 		else $web['report']['upcoming']= 0;
if( isset($web['failed']) && count($web['failed']) > 0) 		$web['report']['failed'] = 1; 		else $web['report']['failed'] = 0;
if( isset($web['overdue']) && count($web['overdue']) > 0) 		$web['report']['overdue'] = 1; 		else $web['report']['overdue'] = 0;

echo $twig->render('front-dashboard.html', array('web' => $web));
