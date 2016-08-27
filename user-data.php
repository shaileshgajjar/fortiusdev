<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

if ( $session->get('roc_saq') == 'roc' )
	$roc_saq		= '';
else
	$roc_saq		= $session->get('roc_saq').'_';


$listscripts = explode("/", $_SERVER["HTTP_REFERER"]);
$web['pagetitle']		= $web['company'].' - Documents';
$web['table']			= 'customer';
$web['page']			= 'documents';
$web['editscript']		= 'fill-data.php';
$web['listscript']		= 'dashboard.php';

$web['title']			= str_replace('_', ' ', $web['version']).'Documents';
$web['id']				= $request->get('id', '');
$web['task']			= $request->get('task', '');
$web['err']				= $request->get('err', '');
$web['pid']				= $request->get('pid', 0);
$web['requirements_id']	= $request->get('requirements_id', 0);
$web['inplace_filter']	= $request->get('inplace_filter', '');
$web['proc_req_search']	= $request->get('proc_req_search', '');

$web['pg']				= $request->get('pg', 1);
$web['en']				= $request->get('en', 10);
$web['sb']				= $request->get('sb', 'title');
$web['sk']				= $request->get('sk', '');
$web['ob']				= $request->get('ob', 'id');
$web['ot']				= $request->get('ot', 'asc');
$web['company_id']		= $session->get('company_id');

$tbl = new table('merchant_type');
$tbl->cols('t1.merchant_type');
$tbl->cols('t1.roc_saq');
$tbl->cols('c.company_name');
$tbl->join('customer','c.merchant_type_id','t1.id', 'c');
$tbl->condition('WHERE', 'c.id', $web['company_id']);
$rows = $tbl->getList();

if ( count($rows) > 0 )
{
	$web['company_name'] = $rows[0]['company_name'];
	$web['merchant_type'] = $rows[0]['merchant_type'];
	$web['roc_saq'] = $rows[0]['roc_saq'];
}	
unset($tbl);
if ( $web['task'] == 'save' || $web['task'] == 'continue' )
{
	// all savings are in ajax
}

if ( $web['task'] != 'save' )
{
	$tbl = new table('document');
	$tbl->cols('r.id');
	$tbl->cols('r.title AS rtitle');
	$tbl->cols('r.description');
	$tbl->cols('r.major_observation');
	$tbl->join($web['version'].$roc_saq.'requirements', 'r.id', 't1.requirements_id', 'r', 'JOIN');
	$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
	if ( $session->get('userrole') == 'u' )
	{
		$tbl->join('document_user_group', 'dug.document_id', 't1.id', 'dug', 'JOIN');
		$tbl->condition('AND', 'dug.user_group_id', $session->get('user_group_id'));
	}
	$tbl->groupby('r.id');
	$web['requirements'] = $tbl->getList();
	$web['merchant_id'] = 0;
	if ( isset($web['requirements'][0]) )
	{
		if ( $web['requirements_id'] == 0 )
			$web['requirements_id'] = $web['requirements'][0]['id'];
		unset($tbl);
	}
	$web['rows'] = array();
	$web['reports'] = array();
	getUserData();
}
echo $twig->render('front-user-data.html', array('web' => $web));
?>