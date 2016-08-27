<?php

require(dirname(__FILE__).'/config/config.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( isset($_SESSION['userrole']) && !in_array($_SESSION['userrole'], $role) )
{
	header("Location: index.php?err=3");
	exit;
}


$web['id']			= $oApp->get_params('id', '');
$web['requirements_id']	= $oApp->get_params('requirements_id', 0);
$web['company_id']		= $web['id'];

$sql  = "SELECT m.merchant_type, m.roc_saq, c.company_name FROM ".$oApp->prefix."merchant_type m";
$sql .= " LEFT JOIN ".$oApp->prefix."customer c ON c.merchant_type_id = m.id";
$sql .= " WHERE c.id = '".$web['id']."'";
$rs = $oApp->db_query($sql);
$rw = $oApp->db_assoc($rs);
$web['company_name'] = $rw['company_name'];
$web['merchant_type'] = $rw['merchant_type'];
$web['roc_saq'] = $rw['roc_saq'];
$roc_saq = ($web['roc_saq'] == 'roc') ? '' : 'saq_';
$oApp->db_free($rs);
$web['requirements'] = array();
	$sql  = "SELECT r.id, r.title AS rtitle, r.description, r.major_observation";
	$sql .= " FROM ".$oApp->prefix.'requirements r';

	$rs = $oApp->db_query($sql);
	
	while( $rw = $oApp->db_assoc($rs) )
		$web['requirements'][$rw['id']] = $rw;

	foreach($web['requirements'] as $reqs)
	{
		$sql2  = " SELECT *  FROM ".$oApp->prefix."sub_requirements WHERE requirements_id =  '".$reqs['id']."' ";
		$rs2 = $oApp->db_query($sql2);		
		while( $rw2 = $oApp->db_assoc($rs2) )
			$web['requirements'][$reqs['id']]['sub_requirements'][ $rw2['id']] = $rw2;
			
	}
	

	//echo "<pre>";
	//print_r($web['requirements']);
	$oApp->db_free($rs);
	//exit;
	$html = '';
	$html = '<p><strong>6. 	Findings and Observations
				</strong></p>
				<p><strong>Build and Maintain a Secure Network and Systems </strong></p>';
	
	
	 foreach($web['requirements'] as $req)
	 {
		$html .= '<em><strong>Requirement '.$req['id'].': 	Install and maintain a firewall configuration to protect cardholder data </strong></em><strong></strong>';
		$html .= '<table width="100%" style="border: 1px solid !important; border-color:green;" >
				<thead>
				<tr>
				 <th height="54" rowspan="2" align="left" valign="middle"  style="background:#c5e3c0;">PCI DSS Requirements <br />
				 and Testing Procedures</th>
				 <th rowspan="2" valign="middle"  style="background:#c5e3c0;">Reporting Instruction</th>
				 <th rowspan="2" valign="middle"  style="background:#c5e3c0;">ROC Reporting Details:<br />
				 Assessor\'s Response</th>
				 <th valign="middle" colspan="5"  style="background:#c5e3c0;">Summary of Assessment Findings <br />
				 (check one)</th>
			  </tr>
			   <tr>
				 <th valign="middle"  style="background:#c5e3c0;">In Place</th>
				 <th valign="middle"  style="background:#c5e3c0;">In Place with CCW</th>
				 <th valign="middle"  style="background:#c5e3c0;">N/A</th>
				 <th valign="middle"  style="background:#c5e3c0;">Not Tested</th>
				 <th valign="middle"  style="background:#c5e3c0;">Not in Place</th>
			  </tr>';
			$_html = '';
			
			foreach($req['sub_requirements'] as $s_req )
			{
				//echo "<pre>";
				//print_r($s_req);
				
				$web['rows'] = array();
				$web['reports'] = array();
				$sql  = "SELECT p.id AS pid, p.guidance AS Guide, p.allowdoc, p.number, p.title AS ptitle, p.priority,";
				$sql .= " sr.ref AS srref, sr.title AS srtitle, sr.guidance, sr.critical_security,";
				$sql .= " d.response, d.inplace, d.id AS doc_id, d.locked,";
				$sql .= " d.constraints, d.objective, d.risk, d.dcontrols, d.vcontrols, d.maintenance,";
				$sql .= " (SELECT count(id) FROM ".$oApp->prefix."procedure_comment pc WHERE pc.procedure_id = p.id AND pc.company_id = '".$web['company_id']."') as total_comments";
				$sql .= " FROM ".$oApp->prefix.'document d';
				$sql .= " JOIN ".$oApp->prefix.$roc_saq."procedure p ON p.id = d.procedure_id";
				$sql .= " JOIN ".$oApp->prefix.$roc_saq."sub_requirements sr ON sr.id = d.sub_requirements_id";
				$sql .= " WHERE p.requirements_id = '".$req['id']."'";
				$sql .= " AND p.sub_requirements_id = '".$s_req['id']."'";
				$sql .= " AND d.company_id = '".$web['company_id']."'";
				$sql .= " ORDER BY p.id";
				//echo $sql . "<br>";
				$rs = $oApp->db_query($sql);
				
				if( $rs != '')
				{
					 $_html .= '<tr>
								<th align="left" valign="middle"  style="background:#e8f3dc;" colspan="3" >'.$s_req['ref'].' '.$s_req['title'].'</th>
								<th valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
								<th valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
								<th valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
								<th valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
								<th valign="middle"  style="background:#e8f3dc;">&nbsp;</th>
							</tr>';
					$web['rows'] = array();
					$_pro_html = '';
					//loops for all reposts of the procedure
					while ( $rw = $oApp->db_assoc($rs) )
					{
						
						
						$web['rows'][$rw['pid']] = $rw;
						$web['rows'][$rw['pid']]['ccw_completed'] = 'n';
						if ( $web['rows'][$rw['pid']]['inplace'] == 'C' )
						{
							if ( $rw['constraints'] != '' && $rw['objective'] != '' && $rw['risk'] != ''
								&& $rw['dcontrols'] != '' && $rw['vcontrols'] != '' && $rw['maintenance'] != '' )
								$web['rows'][$rw['pid']]['ccw_completed'] = 'y';
						}
					
						$_pro_html .= '<tr> <td {rowspan}  {width} > '.$rw['number'].'&nbsp; '.$rw['ptitle'].'</td> </tr>';
						
						$sql2  = " SELECT rep.id, rep.title, rep.bulet, ";
						$sql2 .= " dr.reporting_id , dr.comment AS drc, dr.document_id AS dr_doc_id ";
						$sql2 .= " FROM ".$oApp->prefix."reporting rep ";
						$sql2 .= " LEFT JOIN ".$oApp->prefix."document_reporting dr ON dr.reporting_id = rep.id ";
						$sql2 .= " WHERE rep.procedure_id  = '".$rw['pid']."'";
						$rs2 = $oApp->db_query($sql2);
						
						if($rs2)
						{
							$_reports = array();
							$_reports_html = '';
							while ( $rw2 = $oApp->db_assoc($rs2) )
							{
								$_reports[$rw2['id']] = $rw2;
								
								$_reports_html .='<tr>';
								if($rw2['bulet'] == '0')
									$_reports_html .='<td colspan="8"  width="25%"  >'.$rw2['title'] .'</td>';
								else
									$_reports_html .='<td colspan="1"  width="25%" > <li>'.$rw2['title'] .'</li> </td><td colspan="7" > '.$rw2['drc'] .' </td>';
								
								$_reports_html .='</tr>';
							}
						}	
							
						$p_reports = count($_reports);
						$rowspan = '';
						$width = '';
						
						if( $p_reports > 0  )
						{
							$rowspan 	= 'rowspan="'.($p_reports + 1).'" ';
							$width 		= 'width="25%" ';
						}
						//exit($html);
						$_pro_html .= $_reports_html;
						$_pro_html = str_replace('{rowspan}', $rowspan, $_pro_html);
						$_pro_html = str_replace('{width}', $width, $_pro_html);
						
						$oApp->db_free($rs2);
					} //loops for all reposts of the procedure ends here
					
					$_html .= $_pro_html;
					
				}
				
			}
		
			$html .= $_html;
		
	
		$html .='</thead>';
		$html .='</table>';
	 }
 //$html .= '</body>';
 //$html .= '</html>';
 echo $html;

?>

