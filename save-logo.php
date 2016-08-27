<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$fields = array();
$task	= $request->get('task', '');
$company_id	= $session->get('company_id');
$user_id	= $session->get('uid');
$userrole	= $session->get('userrole');
if ( $task == 'logosave' )
{
	if( isset($_FILES))
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
		$allowed = array('png','jpg', 'jpeg','gif');
		$notallowed = array('php', 'js');
		$n = $_FILES['mylogo']['name'];
		$extary = explode(".", $n);
		$ext = $extary[count($extary)-1];
		$s = $_FILES['mylogo']['size'];
		if ( in_array($ext, $notallowed) )
		{
			echo 'Error: '.implode(', ', $allowed).' files are not allowed.';
			exit;
		}
		if (is_array($n)) {
			$c = count($n);
			for ($i=0; $i < $c; $i++) {
				echo "<br>uploaded: " . $n[$i] . " (" . $s[$i] . " bytes)";
			}
		}
		else
		{
			$path = dirname(__FILE__).'/uploads/logos/';
			if ( !is_dir($path) )
			{
				mkdir($path, 0777);
			}
			$logo = 'company_logo_'.$company_id.'.'.$ext;
			copy($_FILES['mylogo']['tmp_name'], $path.$logo);
			$tbl = new table('customer');
			$tbl->load($company_id);
			$tbl->setValue('company_logo', $logo);
			$tbl->save();
			$session->set('company_logo',  $logo);
			unset($tbl);
			add_log_history('EDIT', 'LOGO', $user_id, $userrole);
			echo "Uploaded: $n\n$logo";
			exit;
		}
	}
}
?>