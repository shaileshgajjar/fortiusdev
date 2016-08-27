<?php
require(dirname(__FILE__).'/config/config.new.php');
require(dirname(__FILE__).'/lib/class.phpmailer.php');
require(dirname(__FILE__).'/lib/prepare.graph.php');
require_once(dirname(__FILE__).'/lib/phpMyGraph5.0.php');
error_reporting(0);
$mail = new PHPMailer;
	global $lib;
	$today = getdate();
		//print_r($today);
		//notifications settings for company admin company user qsa and qa
		$tbl = new table('users');
		$tbl->cols("t1.email AS admin_email");
		$tbl->cols("CONCAT(t1.first_name,' ',t1.last_name) AS username");
		$tbl->condition("WHERE", "t1.userrole", "a");
		$tbl->condition("AND", "t1.username", "Admin");
		$admin_data = $tbl->getList();
		$admin['data']= array();
		unset($tbl);
		foreach( $admin_data as $rw3 )
		{
			$admin['data']['username'] = $rw3['username'];
			$admin['data']['email'] = $rw3['admin_email'];
		}
		
		$tempData = array();
		$nSettingsDataArr = array();
		$tbl = new table('notification_settings');
		$tbl->cols("t1.users_id AS uid");		
		$tbl->cols("t1.comp_id");		
		$tbl->cols("t1.userrole");		
		$tbl->cols("t1.freq");		
		$tbl->cols("t1.time_to_send");		
		$tbl->cols("t1.content");		
		$tbl->cols("c.start_date");		
		$tbl->cols("c.compliance_due_date");		
		$tbl->cols("c.company_name");		
		$tbl->cols("u.email AS receiver_email");		
		$tbl->cols("CONCAT(u.first_name,' ',u.last_name) AS username");		
		$tbl->cols("mt.merchant_type");
		$tbl->join("customer", "c.id", "t1.comp_id", "c");		
		$tbl->join("merchant_type", "mt.id", "c.merchant_type_id", "mt");		
		$tbl->join("users", "u.id", "t1.users_id", "u");		
		$n_data = $tbl->getList();
		$users['n_settings']= array();
		$nSettingsDataArr = array();
		foreach( $n_data as $rw2)
			$users['n_settings'][] = $rw2;
		if($users['n_settings'] != '')
		{
			foreach( $users['n_settings'] as $settings )
			{	// sending Projects status report to Company Admin as per their notifications settings
				if ($settings['userrole'] == 'c') 
				{
				  switch ($settings['content'])
				   {
					case 'html':
						sendHtmlReport($settings, $admin);
						break;
					case 'graph':   
							$headings = array();
							$graph  = 'compliance_graph_'.$settings['comp_id'].'_'.$settings['uid'].'_'.$settings['freq'].'_'. date('d_m_y_i').".png";
							$templateFile =  "emailtemplates/graph_notification_company_admin.html";
							$headings = getReportDuration($settings);
							$headings['company_name']           = $settings['company_name'];
							$headings['assessment_type']        = $settings['merchant_type'];
							$headings['start_date']             = $settings['start_date'];
							$headings['compliance_due_date']    = $settings['compliance_due_date'];
					  
							$content = '';
							//$admin_email = $admin['data']['email'];
							$admin_email = "shailesh.gajjar83@gmail.com";
							$mail->setFrom($admin_email, $admin['data']['username']);
					
							$mail->addReplyTo($admin_email, $admin['data']['username']);
					
							$mail->addAddress($settings['receiver_email'], $settings['username']);
						
							$mail->Subject = ' This is a '. $headings['frequency'].'  report of Compliance/Severity Status '. 	$headings['from_to'];
			   
							$body  = 'Hello,';
							
							$body .=  'This is a '. $headings['frequency'].'  report of Compliance/Severity Status '. $headings['from_to'] .' <br><br>';
							$body .=  '<b> Comapny Name</b>:&nbsp;'. $headings['company_name'].'<b> Company</b>:&nbsp;'. $headings['assessment_type'] .' <br><br>';
							$body .=  '<b> Project Start Date</b>:&nbsp;'. $headings['start_date'].'<b> Due Date </b>:&nbsp;'. $headings['compliance_due_date'] .' <br>';
							
							$mail->IsHTML(true);
							$mail->Body = preg_replace('/\[\]/','',$body);
						
							prepareReportGraph($settings);
							
							$mail->addAttachment(dirname(__FILE__) .'/uploads/graphs/'.$graph);
							$mail->send();
							unlink(dirname(__FILE__) .'/uploads/graphs/'.$graph);
							
							break; 
				   }
				}
				elseif($settings['userrole'] == 's' || $settings['userrole'] == 'q')
				{
					
				}
				elseif($settings['userrole'] == 'u' )
				{
					sendTaskReport($settings, $admin);
					
				}
			}
		}
sendCommentReport($admin);
?>