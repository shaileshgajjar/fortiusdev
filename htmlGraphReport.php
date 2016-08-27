<?php

require(dirname(__FILE__).'/config/config.php');
require(dirname(__FILE__).'/lib/phpMyGraph5.0.php');
global $oApp;

$web['id']		= $_GET['id'];
$sql  = "SELECT m.merchant_type, c.company_name FROM ".$oApp->prefix."merchant_type m";
$sql .= " LEFT JOIN ".$oApp->prefix."customer c ON c.merchant_type_id = m.id";
$rs = $oApp->db_query($sql);
$rw = $oApp->db_assoc($rs);

$web['company_name'] = $rw['company_name'];
$web['merchant_type'] = $rw['merchant_type'];
$oApp->db_free($rs);
	
$cData['merchant_type'] = $web['merchant_type'];
$cData['company_name'] = $web['company_name'];
$cData['company_id'] = $web['company_id'];

	$complanceArr = array();
	$htmlOutputArr = array();
	$templateDataArr = array();
	
		if( isset($web['id']) && !empty($web['id']) )
		{
			
			$complianceArr['company_name'] = ($ReceiverDataArr['company_name']) ? $ReceiverDataArr['company_name'] :"" ;
			$complianceArr['merchant_type'] = ($ReceiverDataArr['merchant_type']) ? $ReceiverDataArr['merchant_type'] : "" ;
			
				
			$complianceArr['rows'] = array();
			$sql  = "SELECT p.requirements_id, p.sub_requirements_id, p.id AS pid, p.priority, d.inplace, c.compliance_due_date, c.start_date ";
			$sql .= " FROM ".$oApp->prefix.'procedure_merchant pm';
			$sql .= " LEFT JOIN ".$oApp->prefix."customer c ON c.merchant_type_id = pm.merchant_id";
			$sql .= " LEFT JOIN ".$oApp->prefix."`procedure` p ON p.id = pm.procedure_id";
			$sql .= " LEFT JOIN ".$oApp->prefix."document d ON p.id = d.procedure_id AND company_id = '".$web['id']."'";
			$sql .= " WHERE c.id = '".$web['id']."'";
			$sql .= " ORDER BY p.requirements_id, p.sub_requirements_id, p.id";
		
			$rs = $oApp->db_query($sql);
			$totayary = array('Y'=>0, 'N'=>0, 'C'=>0, 'NA'=>0, 'NT'=>0, 'severity'=>0, 'maxseverity'=>0);
			
			while ( $rw = $oApp->db_assoc($rs) )
			{
				if ( !isset($complianceArr['rows'][$rw['requirements_id']]) )
					$complianceArr['rows'][$rw['requirements_id']] = array('Y'=>0, 'N'=>0, 'C'=>0, 'NA'=>0, 'NT'=>0, 'severity'=>0, 'maxseverity'=>0, 'total'=>0, 'percentage'=>0);
				$inplace = $rw['inplace'];
				if ( $inplace == '' )
					$inplace = 'NT';
				$complianceArr['rows'][$rw['requirements_id']][$inplace]++;
				$complianceArr['rows'][$rw['requirements_id']]['total']++;
				$totayary[$inplace]++;
				$complianceArr['rows'][$rw['requirements_id']]['maxseverity'] += abs(7-$rw['priority']);
				$totayary['maxseverity'] += abs(7-$rw['priority']);
				
				if ( $rw['inplace'] == 'Y' || $rw['inplace'] == 'C' || $rw['inplace'] == 'NA' )
				{
						$complianceArr['rows'][$rw['requirements_id']]['severity'] += abs(7-$rw['priority']);
						$totayary['severity'] += abs(7-$rw['priority']);
				}
				$complianceArr['compliance_due_date'] 	= $oApp->format_date($rw['compliance_due_date'], 'm-d-Y');
				$complianceArr['start_date'] 			= $oApp->format_date($rw['start_date'], 'm-d-Y');		
			}
		
	
			$map_axis = array();
				foreach($complianceArr['rows'] as $k => $v)
				{	
					if ( $v['total'] == 0 )
						$complianceArr['rows'][$k]['percentage'] = 'NA';
					else
						$complianceArr['rows'][$k]['percentage'] = round(($v['Y']+$v['C'])/$v['total']*100);
					//if ( $web['rows'][$k]['percentage'] > 0 )
					//{
						$s1[] = $complianceArr['rows'][$k]['percentage'];
						$label[] = "'".$complianceArr['rows'][$k]['percentage'].'%'."'";
						$ticks[] = "'".$k."'";
						$map_axis[$k] = $complianceArr['rows'][$k]['percentage'];
					//}
				}
						
			$complianceArr['s1'] 	= implode(', ', $s1);
			$complianceArr['label'] = implode(', ', $label);
			$complianceArr['ticks'] = implode(', ', $ticks);
			$complianceArr['total'] = $totayary;
		
		
		$htmlOutputArr['company_name'] 			= $complianceArr['company_name'];
		$htmlOutputArr['assessment_type'] 		= $complianceArr['merchant_type'];
		$htmlOutputArr['tableBody'] 			= $tableBody;
		$htmlOutputArr['tfoot'] 				= $tfoot;
		$htmlOutputArr['start_date'] 			= $complianceArr['start_date'];
		$htmlOutputArr['complience_due_date'] 	= $complianceArr['compliance_due_date'];
		
		$nSettings = array();
		$sql2  = "SELECT ns.comp_id, ns.userrole, ns.freq, ns.day, ns.content, c.company_name, u.email AS receiver_email ";
		$sql2 .= " FROM  ".$oApp->prefix."notification_settings ns ";
		$sql2 .= " JOIN  ".$oApp->prefix." customer c ON c.id = ns.comp_id ";
		$sql2 .= " JOIN  ".$oApp->prefix." users u ON u.id= ns.users_id";
		$sql2 .= " WHERE ns.comp_id = '".$web['id']."' AND ns.userrole = 'c' ";
		
				$rs2 = $oApp->db_query($sql2);
				
				while ( $rw2 = $oApp->db_assoc($rs2) )
				{
						$nSettings['freq'] 					= $rw2['freq'];
						$nSettings['day'] 					= $rw2['day'];
						$nSettings['content'] 				= $rw2['content'];
						$nSettings['company_name'] 			= $rw2['company_name'];
						$nSettings['receiver_email'] 		= $rw2['receiver_email'];
						$nSettings['userrole'] 				= $rw2['userrole'];
				}
		$nSettings['sender_email'] 	= 'admin@security.com'; //$sender_email;
		
		$duration = getReportDuration($nSettings);
		
		if( !empty($duration) )
		{
		
				$templateDataArr['htmlOutputArr'] 	=  $script . $html;
				$templateDataArr['receiver_email'] 	= 'shailesh.jamanapara@fortiustechsolutions.com'; //$n_settings['receiver_email'];
				$templateDataArr['sender_email'] 	= 'admin@security.com'; //$sender_email;
				$templateDataArr['email_subject'] 	= 'This is a '.$duration['frequency'].'  report of Compliance/Severity Status '. $duration['from_to'];	
				$templateDataArr['data'] = array();
				$templateDataArr['data'] = $map_axis ;
				
				$cfg = array();
				$cfg['title'] 	= 'Compliance status report';
				$cfg['width'] 	= 500;
				$cfg['height'] 	= 250;
				//echo json_encode($map_axis);
				//echo json_encode($cfg);
				$templateDataArr['cfg'] = $cfg ;

				$params = array();

				$cfg['file-name'] = 'compiance_graph_'. $web['id'] .'_'.date('d') .'_1';
	
				$cfg['width'] = 500;

			}
    
	
	$graph = new phpMyGraph();
		//print_r($cfg); exit;
	header("Content-type: image/png");
	
	$graph->parseVerticalColumnGraph($map_axis, $cfg);
	$headers = "From:  admin@security.com \r\nContent-type: text/html\r\n";
	
   $body ='
			<div class="content">
			<h3> Compliance status report</h3>
			Hello, <br />
				<img src="http://security.shailesh.com/lib/graphs/compiance_graph_'. $web['id'] .'_'.date('d') .'_1.png"  ><br />
			</div>
			';
			
	@mail('shailesh.jamanapara@fortiustechsolutions.com','test Email', $body, $headers);
	
		
	}
	
	

?>