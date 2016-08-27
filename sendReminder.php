<?php
require(dirname(__FILE__).'/config/config.new.php');
require(dirname(__FILE__).'/lib/class.phpmailer.php');
require(dirname(__FILE__).'/lib/prepare.graph.php');
require_once(dirname(__FILE__).'/lib/phpMyGraph5.0.php');
error_reporting(0);
$mail = new PHPMailer;
	global $lib;
	$today = getdate();
	
	$weekly 	 	= date('Y-m-d', strtotime("+".$web['settings']['failed_task_due_date']['value']." day"));
	$three_days 	= date('Y-m-d', strtotime("+3 day"));
	$two_days 	= date('Y-m-d', strtotime("+2 day"));
	$one_day 		= date('Y-m-d', strtotime("+1 day"));
	$same_day 	= date('Y-m-d');
	//sneding remonder of upcoming tasks to user qa qsa
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
	global $web, $roc_saq;
	$tbl = new table('document');
	$tbl->cols('t1.*');
	$tbl->cols('p.requirements_id');
	$tbl->cols('p.sub_requirements_id');
	$tbl->cols('p.id AS pid');
	$tbl->cols('p.guidance AS Guide');
	$tbl->cols('p.number');
	$tbl->cols('p.title AS ptitle');
	$tbl->cols('p.priority');
	$tbl->cols('t1.id AS doc_id');
	$tbl->cols('c.id AS cid');
	$tbl->cols('c.qsa_id');
	$tbl->cols('c.qa_id');
	$tbl->cols('c.company_name');
	$qsa = "CONCAT(u_s.first_name, ' ', u_s.last_name) AS qsa";
	$tbl->cols($qsa);
	$tbl->cols('u_s.email AS qsa_email');
	$tbl->cols('u_s.title AS qsa_title');
	$qa = "CONCAT(u_q.first_name, ' ', u_q.last_name) AS qa";
	$tbl->cols($qa);
	$tbl->cols('u_q.email AS qa_email');
	$tbl->cols('u_q.title AS qa_title');
	$tbl->join($web['version'].$roc_saq.'procedure', 'p.id', 't1.procedure_id', 'p');
	$tbl->join($web['version'].$roc_saq.'sub_requirements', 'sr.id', 't1.sub_requirements_id', 'sr');
	$tbl->join('customer', 'c.id', 't1.company_id', 'c');
	$tbl->join('users', 'u_s.id', 'c.qsa_id', 'u_s');
	$tbl->join('users', 'u_q.id', 'c.qa_id', 'u_q');
	$tbl->condition('WHERE', 't1.completion_date', '0000-00-00', '!=');
	$tbl->condition('AND', ' ( t1.completion_date', $weekly, '=');
	$tbl->condition('OR', 't1.completion_date', $three_days, '=');
	$tbl->condition('OR', 't1.completion_date', $two_days, '=');
	$tbl->condition('OR', 't1.completion_date', $one_day, '=');
	$tbl->condition('OR', 't1.completion_date', $same_day . ')' , '=');
	$tbl->condition('AND', ' t1.company_id', 0, '!=');
	$tbl->orderby('p.id');
	$rows = $tbl->getList();
	unset($tbl);
	$no = 0;

	foreach($rows as $rw)
	{
	
		$html = array();
		$fcData 		= getFailedControlData($rw['company_id'], $rw['doc_id'] , $rw['procedure_id']);
		$html['control_ref'] 	= $fcData['number'];
		$html['control_name'] 	= $fcData['ptitle'];
		$failed = ($fcData['inplace'] == 'N')?'Failed':'';
		$html['control_status'] 	= '[ '.$fcData['inplace'] . ' ]&nbsp;&nbsp;'.$failed;
		$html['updated_on'] 	= $fcData['updated_on'];
		$html['reason'] 		= (!empty($fcData['reason']))?$fcData['reason']:"No reason described yet";
		$html['due_date'] 		= $fcData['due_date'];
		$html['assessment_type'] = strtoupper($fcData['roc_saq']);
		$html['admin_sign'] 	= $admin['data']['username'];
		$subject 		= 'Upcoming Task Reminder  [ Task# '.$fcData['number'].' ]';
		$sender 		= $admin['data']['email'];
		$f_path 		=  APP_PATH .'/emailtemplates/task-reminder.html';
		echo $rw['ready_for'];exit;
		if($rw['ready_for'] == 'u')
		{ echo $rw['user_id'];exit;
			if($rw['user_id'] != 0 )
			{
				$tbl = new table('users');
				$tbl->load($rw['user_id']);
				$username 	= ucfirst($tbl->getValue('title')) .'. '.$tbl->getValue('first_name'). ' ' .$tbl->getValue('last_name');
				$receiver 	= $tbl->getValue('email');
				$html['username'] = $username;
				$lib->send_mail($f_path, $receiver, $sender, $subject,'', $html, false);	
			}
			else
			{
				$tbl = new table('document_user_group');
				$tbl->cols('t1.document_id');
				$tbl->cols('t1.user_group_id');
				$tbl->cols('u.id AS userid');
				$tbl->cols("CONCAT(u.first_name, ' ', u.last_name) AS username");
				$tbl->join('users', 'u.user_group_id', 't1.user_group_id', 'u');
				$tbl->condition('WHERE', 't1.document_id', $rw['doc_id']);
				$tbl->condition('AND', 't1.company_id', $rw['company_id']);
				$usersList = $tbl->getList();
				foreach($usersList as $user_data)
				{ 
					if(!empty($user_data['email']))
					{
						$username = $user_data['title'].' '.$user_data['first_name']. ' ' .$user_data['last_name'];
						$receiver = $user_data['email'];
						$html['username'] = $username;
						$lib->send_mail($f_path, $receiver, $sender, $subject,'', $html, false);
					}
				}
			}
		}
		if($rw['ready_for'] == 'review')
		{
			$username 	= ucfirst($rw['qsa_title']) .'. '.$rw['qsa'];
			$receiver 	= $rw['qsa_email'];
			$html['username'] = $username;
			$lib->send_mail($f_path, $receiver, $sender, $subject,'', $html, false);	
		}
		if($rw['ready_for'] == 'q')
		{
			$username 	= ucfirst($rw['qa_title']) .'. '.$rw['qa'];
			$receiver 	= $rw['qa_email'];
			$html['username'] = $username;
			$lib->send_mail($f_path, $receiver, $sender, $subject,'', $html, false);	
		}
	}	
	//Sending reminder of over due tasks to company admin
	$three_days_later = date('Y-m-d', strtotime("-3 day"));
	$tbl = new table('customer');
	$tbl->cols('t1.compliance_due_date');
	$tbl->cols('t1.company_name');
	$tbl->cols('t1.id AS company_id');
	//Customer Details
	$c_admin = "CONCAT(ca.first_name, ' ', ca.last_name) AS c_admin";
	$tbl->cols($c_admin);
	$tbl->cols('ca.email AS c_admin_email');
	$tbl->cols('ca.title AS c_admin_title');
	//Customers QSA Details
	$qsa = "CONCAT(u_s.first_name, ' ', u_s.last_name) AS qsa";
	$tbl->cols($qsa);
	$tbl->cols('u_s.email AS qsa_email');
	$tbl->cols('u_s.title AS qsa_title');
	//Customers QA Details
	$qa = "CONCAT(u_q.first_name, ' ', u_q.last_name) AS qa";
	$tbl->cols($qa);
	$tbl->cols('u_q.email AS qa_email');
	$tbl->cols('u_q.title AS qa_title');
	$tbl->join('users', 'ca.company_id', 't1.id', 'ca');
	$tbl->join('users', 'u_s.id', 't1.qsa_id', 'u_s');
	$tbl->join('users', 'u_q.id', 't1.qa_id', 'u_q');
	$tbl->condition('WHERE', 'ca.userrole' ,'c');
	$tbl->condition('AND', 't1.compliance_due_date' ,date('Y-m-d'), '>');
	$c_admin_data = $tbl->getList();
	unset($tbl);
	$f_path 	=  APP_PATH .'/emailtemplates/over-due-task-reminder.html';
	foreach($c_admin_data as $rw )
	{
		$tbl = new table('document');
		$tbl->cols('t1.*');
		$tbl->cols('p.requirements_id');
		$tbl->cols('p.sub_requirements_id');
		$tbl->cols('p.id AS pid');
		$tbl->cols('p.guidance AS Guide');
		$tbl->cols('p.number');
		$tbl->cols('p.title AS ptitle');
		$tbl->cols('p.priority');
		$tbl->cols('t1.id AS doc_id');
		$tbl->join($web['version'].$roc_saq.'procedure', 'p.id', 't1.procedure_id', 'p');
		$tbl->join($web['version'].$roc_saq.'sub_requirements', 'sr.id', 't1.sub_requirements_id', 'sr');
		$tbl->condition('WHERE', 't1.completion_date', '0000-00-00', '!=');
		$tbl->condition('AND', ' t1.completion_date', $three_days_later, '<');
		$tbl->condition('AND', ' t1.company_id', $rw['company_id']);
		$tbl->orderby('p.id');
		$rows = $tbl->getList();
		unset($tbl);
		foreach($rows as $row)
		{
			$html = array();
			$fcData 		= getFailedControlData($rw['company_id'], $row['doc_id'] , $row['procedure_id']);
			$failed 	= ($fcData['inplace'] == 'N')?'Failed':'';
			$reason 	= (!empty($fcData['reason']))?$fcData['reason']:"No reason described yet";
			
			$html['control_ref'] 	= $fcData['number'];
			$html['control_name'] 	= $fcData['ptitle'];
			$html['control_status'] 	= '[ '.$fcData['inplace'] . ' ]&nbsp;&nbsp;'.$failed;
			$html['updated_on'] 		= $fcData['updated_on'];
			$html['reason'] 		= $reason;
			$html['due_date'] 		= $fcData['due_date'];
			$html['assessment_type'] 	= strtoupper($fcData['roc_saq']);
			$html['admin_sign'] 		= $admin['data']['username'];
			$html['qsa'] 			= $rw['qsa'];
			$html['qsa_email'] 		= $rw['qsa_email'];
			$html['qa'] 			= $rw['qa'];
			$html['qa_email'] 		= $rw['qa_email'];
			$subject 				= 'Reminder of Over Due Task [ #'.$fcData['number'].' ]';
			$sender 				= $admin['data']['email'];
			
			
			$username = ucfirst($rw['c_admin_title']).' '.$rw['c_admin'];
			$receiver = $rw['c_admin_email'].",".$rw['qsa_email'].",".$rw['qa_email'];
			$html['username'] = $username;
			$lib->send_mail($f_path, $receiver, $sender, $subject,'', $html, false);
		
		}
	}

?>