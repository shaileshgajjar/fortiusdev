<?php
$role = array('c');
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']				= $web['company'].' - QSA Assessors';
$web['table']					= 'users';
$web['page']					= 'assessor';
$web['subpage']					= 'assessor';
$web['editscript']				= 'assessor.php';
$web['listscript']				= 'assessors.php';
$web['taskcript']				= 'assessor.php';

$web['search']['first_name']	= 'First Name';
$web['search']['last_name']		= 'Last Name';

$web['title']	= 'QSA Assessors';
$web['id']		= $request->get('id', '');
$web['task']	= $request->get('task', '');
$web['err']		= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'first_name');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$tbl = new table($web['table']);
$tbl->join('customer_assessor', 'ca.assessor_id', "t1.id AND customer_id = '".$session->get('company_id')."'", 'ca', 'JOIN');
$tbl->cols('t1.*');
$tbl->condition('WHERE', 't1.userrole', 's');
if ( $web['sk'] != "" )
	$tbl->having($web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->orderby($web['ob'], $web['ot']);

$web['rows'] = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';
unset($tbl);

echo $twig->render('front-assessors.html', array('web' => $web));
