<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']				= $web['company'].' - Documents';
$web['table']				= 'document';
$web['page']					= 'document';
$web['editscript']			= 'document.php';
$web['listscript']			= 'documents.php';
$web['file_dir']				= dirname(__FILE__).'/uploads/documents/';
$web['file_url']				= '/uploads/documents/';

$web['search']['title']		= 'Title';
$web['search']['number']			= 'Procedure No';
$web['search']['procedure_title']	= 'Procedure';

$web['title']	= 'Documents';
$web['id']	= $request->get('id', '');
$web['task']	= $request->get('task', '');
$web['err']	= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');
$tbl =new table($web['table']);
if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$sql = "SELECT * FROM ".$oApp->prefix.$web['table']." WHERE id IN (".implode(",", $removeid).")";
	$rs = $oApp->db_query($sql);
	while ( $rw = $oApp->db_assoc($rs) )
	{
		for($f=1; $f<6; $f++)
		{
			if ( $rw['file'.$f] != '' && file_exists($web['file_dir'].$rw['file'.$f]) )
				unlink($web['file_dir'].$rw['file'.$f]);
		}
		$sql = "DELETE FROM ".$oApp->prefix.$web['table']." WHERE id = '".$rw['id']."'";
		$oApp->db_execute($sql);
	}
	 add_log_history('DEL', 'DOC', $user_id, $userrole);
}

$web['rows'] = array();
$tbl->cols('t1.*');
$tbl->cols('p.number');
$tbl->cols('p.title AS procedure_title');
$tbl->join('procedure', 'p.id', 't1.procedure_id', 'p');
$tbl->condition('WHERE', 't1.user_id', $session->get('uid') );
if ( $web['sk'] != "" )
	$tbl->condition('AND', $web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);
$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);
echo $twig->render('front-documents.html', array('web' => $web));
?>
