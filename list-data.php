<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']				= $web['company'].' - Data';
$web['table']					= 'customer';
$web['page']					= 'inputs';
$web['editscript']				= 'fill-data.php';
$web['listscript']				= 'list-data.php';
$_SESSION['backscript']			= '';
$web['addbtnshow']				= 0;
$web['search']['merchant_type']	= 'Assessment Type';
$web['search']['company_name']	= 'Company Name';
$web['search']['contact_name']	= 'Contact Name';
$web['search']['telephone']		= 'Telephone';
$web['search']['email']			= 'Email';

$web['title']					= 'Data';
$web['id']						= $request->get('id', '');
$web['task']					= $request->get('task', '');
$web['err']						= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$web['userrole'] = $session->get('userrole');
$web['uid'] = $session->get('uid');

$web['rows'] = array();
$tbl = new table($web['table']);
$tbl->cols("t1.*");
$tbl->cols("CONCAT(u.first_name, ' ', u.last_name)   AS contact_name");
$tbl->cols("u.email AS email");
$tbl->cols("u.mobile");
$tbl->cols("m.merchant_type");
$tbl->join("users", "u.company_id", "t1.id", "u");
$tbl->join("merchant_type", "m.id", "t1.merchant_type_id", "m");
if ( $session->get('userrole') == 's' )
	$tbl->join('customer_assessor', 'ca.customer_id', 't1.id AND ca.assessor_id = '.$web['uid'], 'ca', 'JOIN');
if ( $session->get('userrole') == 'q' )
	$tbl->condition("WHERE", "t1.qa_id", $session->get('uid') );
if ( $session->get('userrole') == 'u' )
	$tbl->condition("WHERE", "t1.id", $session->get('company_id') );	
$tbl->condition("AND", "u.userrole", 'c' );	
if ( $web['sk'] != "" ) 
	$tbl->having($web['sb'], '%'.trim($web['sk']).'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);

$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);

echo $twig->render('front-list-data.html', array('web' => $web));
?>
