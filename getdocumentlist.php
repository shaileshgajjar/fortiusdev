<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['cmp_id']	= $request->get('cmp_id', 0);
$web['source']	= $request->get('source', '');
$web['pg']		= $request->get('pg', 0);
$web['delids']	= $request->get('delids', 0);
if ( $web['source'] == 'company' )
	$web['pg']	= 1;

if ( $web['delids'] != '' )
{
	$tbl = new table('procedure_document');
	$tbl->condition('WHERE', 'id', explode(',', $web['delids']), 'in');
	$rows = $tbl->getList();
	unset($tbl);
	$tbl = new table('procedure_document');
	foreach($rows as $row)
	{
		if ( file_exists(__DIR__.'/uploads/documents/'.$row['company_id'].'/'.$row['document']) )
			unlink(__DIR__.'/uploads/documents/'.$row['company_id'].'/'.$row['document']);
		$tbl->delete('id', $row['id']);
	}
	unset($tbl);
}

$tbl = new table('procedure_document');
$tbl->condition('WHERE', 'company_id', $web['cmp_id']);
$tbl->condition('AND', 'procedure_id', '0');
$web['rows']		= $tbl->getList($web['pg'], 10);
$web['total_pages'] = $tbl->getPages();

echo $twig->render('getdocumentlist.html', array('web' => $web));

