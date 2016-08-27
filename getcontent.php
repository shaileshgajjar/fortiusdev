<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
$web['requirements_id']	= $request->get('requirements_id', 0);
$web['merchant_id']		= $request->get('merchant_id', 0);
$web['roc_saq']			= $request->get('roc_saq', 0);
$web['company_id']		= $request->get('company_id', 0);
$web['id']				= $request->get('id', 0);
$tbl = new table('merchant_type');
$tbl->cols('t1.merchant_type');
$tbl->cols('t1.roc_saq');
$tbl->cols('c.company_name');
$tbl->cols('c.qsa_id');
$tbl->cols('c.qa_id');
$tbl->cols('c.assessment_version');
$tbl->join('customer','c.merchant_type_id','t1.id', 'c');
$tbl->condition('WHERE', 'c.id', $web['company_id']);
$rows = $tbl->getList();

if ( count($rows) > 0 )
{
	$web['company_name'] = $rows[0]['company_name'];
	$web['qsa_id'] = $rows[0]['qsa_id'];
	$web['qa_id'] = $rows[0]['qa_id'];
	$web['merchant_type'] = $rows[0]['merchant_type'];
	$web['roc_saq'] = $rows[0]['roc_saq'];
	$web['version'] = $rows[0]['assessment_version'];
}	
unset($tbl);
$web['userrole']		= $session->get('userrole');
$roc_saq = ($web['roc_saq'] == 'roc') ? '' : 'saq_';

$web['rows'] = array();
$web['reports'] = array();
// here we will check that all the procedure of selected requirement has been tested or not
// if tested all then only be show controls list
// set default all the procedures are done
//$web['done'] = 1;
getContentData();

echo $twig->render('getcontent.html', array('web' => $web));
?>