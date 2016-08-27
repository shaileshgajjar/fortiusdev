<?php
require(dirname(__FILE__).'/config/config.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( isset($_SESSION['userrole']) && !in_array($_SESSION['userrole'], $role) )
{
	header("Location: index.php?err=3");
	exit;
}

$web['pagetitle']				= $web['company'].' - Documents';
$web['table']					= 'document';
$web['page']					= 'document';
$web['editscript']				= 'document.php';
$web['listscript']				= 'documents.php';
$web['file_dir']				= dirname(__FILE__).'/uploads/documents/';
$web['file_url']				= '/uploads/documents/';

$web['id']						= $oApp->get_params('id', '0');
$web['task']					= $oApp->get_params('task', '');
$web['err']						= $oApp->get_params('err', '');
$web['title']					= 'Document '.($web['id'] == '0' ? 'New' : 'Edit');

$web['pg']	= $oApp->get_params('pg', 1);
$web['en']	= $oApp->get_params('en', 10);
$web['sb']	= $oApp->get_params('sb', 'title');
$web['sk']	= $oApp->get_params('sk', '');
$web['ob']	= $oApp->get_params('ob', 'id');
$web['ot']	= $oApp->get_params('ot', 'asc');

$web['fields'] = array();
$web['fields']['procedure_id']	= array('value' => '');
$web['fields']['title']			= array('value' => '');
$web['fields']['file1']			= array('value' => '');
$web['fields']['file2']			= array('value' => '');
$web['fields']['file3']			= array('value' => '');
$web['fields']['file4']			= array('value' => '');
$web['fields']['file5']			= array('value' => '');
$web['fields']['comment']		= array('value' => '');

foreach($web['fields'] as $key => $value)
	$web['fields'][$key]['value'] = $oApp->get_params($key, '');

if ( $web['task'] == 'save' )
{
	$web['err'] = '';
	$fileary = array('doc', 'docx', 'pdf', 'txt', 'xls', 'xlsx');
	for($f=1; $f<6; $f++)
	{
		if ( $_FILES["f".$f]["tmp_name"] != '' )
		{
			$images = $web['file_dir'].$_FILES["f".$f]["name"];
			$imgary = explode(".", $images);
			$ext = $imgary[count($imgary)-1];
			if ( !in_array($ext, $fileary) )
				$web['err'] = 'Only '.implode(', ', $fileary).' allowed.';
		}
	}

	if ( $web['err'] == '' )
	{
		$web['fields']['company_id']['value'] = $_SESSION['company_id'];
		$web['fields']['user_id']['value'] = $_SESSION['uid'];
		$refid = $web['id'];
		if ( $refid == 0 )
		{
			$sql  = "SELECT id FROM ".$oApp->prefix."document";
			$sql .= " WHERE company_id = '".$_SESSION['company_id']."'";
			$sql .= " AND procedure_id = '".$web['fields']['procedure_id']['value']."'";
			$rsin = $oApp->db_query($sql);
			if ( $rwin = $oApp->db_assoc($rsin) )
				$refid = $rwin['id'];
		}
		$primary_id = $oApp->db_save_record($web['table'], $refid, $web['fields']);
		$act = ($refid == 0)?'ADD':'EDIT';
		add_log_history($act, 'DOC', $_SESSION['uid'], $_SESSION['userrole']);
		$fields = array();
		for($f=1; $f<6; $f++)
		{
			if ( $_FILES["f".$f]["tmp_name"] != '' )
			{
				$imgfield = 'file'.$f;
				if ( $web['fields'][$imgfield]['value'] != '' && file_exists($web['file_dir'].$web['fields'][$imgfield]['value']) )
					unlink($web['file_dir'].$web['fields'][$imgfield]['value']);
				$fl = $web['file_dir'].$_FILES["f".$f]["name"];
				$fary = explode(".", $fl);
				$ext = $fary[count($fary)-1];
				$org_file = str_replace('.'.$ext, '', $_FILES["f".$f]["name"]).'_'.$primary_id.'_'.$f.'.'.$ext;
				copy($_FILES["f".$f]["tmp_name"],$web['file_dir'].$org_file);
				$fields[$imgfield]['value'] = $org_file;
			}
		}
		if ( count($fields) > 0 )
			$oApp->db_save_record($web['table'], $primary_id, $fields);
			add_log_history('UP', 'DOC', $_SESSION['uid'], $_SESSION['userrole']);
	}
}

if ( $web['id'] > 0 && $web['err'] == '' )
{
	$sql  = "SELECT * FROM ".$oApp->prefix.$web['table'];
	$sql .= " WHERE id = '".$web['id']."'";
	$rs = $oApp->db_query($sql);
	$rw = $oApp->db_assoc($rs);
	foreach($web['fields'] as $key => $value)
		$web['fields'][$key]['value'] = $rw[$key];
}

$sql  = "SELECT p.id, p.number FROM ".$oApp->prefix."procedure_merchant pm";
$sql .= " JOIN ".$oApp->prefix."`procedure` p ON pm.procedure_id = p.id";
$sql .= " JOIN ".$oApp->prefix."customer c ON c.merchant_type_id = pm.merchant_id";
$sql .= " WHERE c.id = '".$_SESSION['company_id']."'";
$sql .= " ORDER BY p.requirements_id, p.sub_requirements_id, p.id";

$web['procedures'] = $oApp->getlist($sql, $web['fields']['procedure_id']['value'], 'id', 'number');
echo $twig->render('front-document.html', array('web' => $web));
?>
