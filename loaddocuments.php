<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$web['company_id']	= $request->get('company_id', '');
$web['path']		= __DIR__.'/uploads/documents/'.$web['company_id'].'/';

/* Query for Getting user Douments  based on company_id */
$tbl = new table('procedure_document');
$tbl->cols('t1.*');
$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
$documents = $tbl->getList();
$web['documents'] = array();
foreach($documents as $document)
{
	if ( file_exists($web['path'].$document['document']) )
		$web['documents'][] = $document;
}
echo $twig->render('loaddocuments.html', array('web' => $web));
?>
