<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$fields = array();
$task		= $request->get('task', '');
$user_id	= $session->get('uid');
$userrole	= $session->get('userrole');
if ( $task == 'profilesave' )
{
	$tbl = new table('users');
	$tbl->load($user_id);
	$tbl->setValue('title', $request->get('title', ''));
	$tbl->setValue('first_name', $request->get('first_name', ''));
	$tbl->setValue('last_name', $request->get('last_name', ''));
	$tbl->setValue('mobile', $request->get('mobile', ''));
	$tbl->save();
	add_log_history('EDIT', 'PROF', $user_id, $userrole);
	unset($tbl);
}

if ( $task == 'avtarsave' )
{
	if( isset($_FILES))
	{
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
		$allowed = array('png','jpg', 'jpeg','gif');
		$notallowed = array('php', 'js');
		$n = $_FILES['myfile']['name'];
		$extary = explode(".", $n);
		$ext = $extary[count($extary)-1];
		$s = $_FILES['myfile']['size'];
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
			$path = dirname(__FILE__).'/uploads/avtars/';
			if ( !is_dir($path) )
			{
				mkdir($path, 0777);
			}
			$avtar = 'users_avtar_'.$user_id.'.'.$ext;
			copy($_FILES['myfile']['tmp_name'], $path.$avtar);
			$tbl = new table('users');
			$tbl->load($user_id);
			$tbl->setValue('users_avtar', $avtar);
			$tbl->save();
			unset($tbl);
			add_log_history('EDIT', 'PROF', $user_id, $userrole);
			echo "Uploaded: $n\n$avtar";
			exit;
		}
	}
}
?>