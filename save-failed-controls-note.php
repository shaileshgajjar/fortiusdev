<?php
require(dirname(__FILE__).'/config/config.new.php');
//xss mitigation functions
function xssafe($comment,$encoding='UTF-8')
{
   return htmlspecialchars($comment,ENT_QUOTES | ENT_HTML401,$encoding);
}
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$company_id 	= $request->get('company_id', 0);
$pid			= $request->get('pid', 0);
$task		= $request->get('task', '');
$proc_note	= $request->get('proc_note', '');
$uid			= $session->get('uid', 0);
$completion_date = $request->get('completion_date', date('Y-m-d'));
$docid 		= $request->get('docid', 0);
$user_id		= $request->get('to_user_id', 0);
$company_name 	= $session->get('company_name');
$fcData = '';
if($task == 'save_control')
{
	$tbl = new table('document');
	$tbl->load($docid);
	$tbl->setValue('completion_date', $completion_date);
	$tbl->setValue('user_id', $user_id);
	$tbl->save();
	unset($tbl);
	$tbl = new table('procedure_comment');
	$tbl->load(0);
	$tbl->setValue('user_id', $session->get('uid'));
	$tbl->setValue('company_id', $company_id);
	$tbl->setValue('procedure_id', $pid);
	$tbl->setValue('comment_type', '3');
	$tbl->setValue('comments', $proc_note);
	$date = date('Y-m-d H:i:s');
	$tbl->setValue('comment_date', $date);
	$tbl->setValue('commented_to', 'u');
	$tbl->setValue('commented_by', $session->get('userrole'));
	$tbl->setValue('failed_control', '1');
	$tbl->setValue('anticipated_completion_date', date('Y-m-d'));
	$tbl->save();
	unset($tbl);
	$html = array();
	$fcData 		= getFailedControlData($company_id, $docid , $pid);
	$html['control_ref'] 	= $fcData['number'];
	$html['control_name'] 	= $fcData['ptitle'];
	$html['control_status'] 	= '['.$fcData['inplace'] . ']&nbsp;&nbsp;Failed';
	$html['updated_on'] 	= $fcData['updated_on'];
	$html['reason'] 		= $fcData['reason'];
	$html['due_date'] 		= $fcData['due_date'];
	$html['remark_by_admin'] 	= $proc_note;
	$html['assessment_type'] 	= $fcData['roc_saq'];
	$html['admin_sign'] 	= $company_name;
	$subject 		= 'Failed Task Notification';
	$sender 		= $web['profile']['email']['value'];
	if($user_id != 0 )
	{
		$tbl = new table('users');
		$tbl->load($user_id);
		$username 	= ucfirst($tbl->getValue('title')) .'. '.$tbl->getValue('first_name'). ' ' .$tbl->getValue('last_name');
		$receiver 	= $tbl->getValue('email');
		//$receiver 	= 'shailesh.jamanapara@fortiustechsolutions.com';
		//$receiver 	= 'customer1@fortiustechsolutions.com';
		$f_path 		=  APP_PATH .'/emailtemplates/failed-control-task-notification.html';
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
		$tbl->condition('WHERE', 't1.document_id', $docid);
		$tbl->condition('AND', 't1.company_id', $company_id );
		$usersList = $tbl->getList();
		foreach($usersList as $user_data)
		{
			if(!empty($user_data['email']))
			{
				$username = $user_data['title'].' '.$user_data['first_name']. ' ' .$user_data['last_name'];
				$receiver = $user_data['email'];
				//$receiver 	= 'shailesh.jamanapara@fortiustechsolutions.com';
				//$receiver 	= 'customer1@fortiustechsolutions.com';
				$html['username'] = $username;
				$lib->send_mail($f_path, $receiver, $sender, $subject,'', $html, false);
			}
		}
	}
	add_log_history('ADD', 'FCDUE', $session->get('uid'), $session->get('userrole'));	
}
?>