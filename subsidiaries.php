<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$web['pagetitle']				= $web['company'].' - Subsidiries';
$web['table']					= 'customer';
$web['page']					= 'subsidiaries';
$web['subpage']				= 'subsidiaries';
$web['editscript']				= 'subsidiary.php';
$web['listscript']				= 'subsidiaries.php';
$_SESSION['backscript']			= '';

$web['search']['merchant_type']	= 'Assessment Type';
$web['search']['qsa']			= 'Assessor QSA';
$web['search']['qa']			= 'Assessor QA';
$web['search']['company_name']	= 'Company Name'; 	
$web['search']['username']		= 'Contact Name';
$web['search']['mobile']			= 'Telephone';
$web['search']['email']			= 'Email';

$web['title']	= 'Subsidiaries';
$web['id']	= $request->get('id', '');
$web['task']	= $request->get('task', '');
$web['err']	= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'rowid');
$web['ot']	= $request->get('ot', 'asc');
$web['parent_id']= $web['profile']['company_id']['value'];
$web['msg']	= $request->get('msg', '');

$tbl = new table($web['table']);
if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$tbl->delete('id', $removeid, 'in');
	$users = new table('users');
	$users->delete('company_id', $removeid, 'in');
	unset($users);
	add_log_history('DEL', 'CUST', $session->get('uid'), $session->get('userrole'));
}
$tbl->cols('t1.*');
$tbl->cols("m.merchant_type,CONCAT(u.first_name, ' ', u.last_name) AS username");
$tbl->cols('u.mobile');
$tbl->cols('u.email');
$tbl->cols('pc.id AS p_id');
$tbl->cols('pc.company_name AS p_company_name');
$tbl->cols("CONCAT(u_s.first_name, ' ', u_s.last_name) AS qsa");
$tbl->cols("CONCAT(u_q.first_name, ' ', u_q.last_name) AS qa");
$tbl->cols("(SELECT COUNT(id) FROM ".$tbl->getPrefix()."document d WHERE d.company_id = t1.id) AS total");
$tbl->cols("(SELECT COUNT(id) FROM ".$tbl->getPrefix()."document d WHERE d.company_id = t1.id AND inplace <> '') AS filled");
$tbl->join('merchant_type', 'm.id', 't1.merchant_type_id', 'm');
$tbl->join('users', 'u.company_id', 't1.id', 'u');
$tbl->join('customer', 'pc.id', 't1.parent_id', 'pc');
$tbl->join('users', 'u_q.id', 't1.qa_id', 'u_q');
$tbl->join('users', 'u_s.id', 't1.qsa_id', 'u_s');
$tbl->condition('WHERE', 't1.parent_id', $web['parent_id']);
$tbl->condition('AND', 'u.userrole', 'c');
if ( $web['sk'] != "" )
	$tbl->having($web['sb'], '%'.$web['sk'].'%', 'LIKE');
$tbl->groupby('t1.company_name');
$tbl->orderby($web['ob'], $web['ot']);

$rows = $tbl->getList($web['pg'], $web['en']);
$web['total_pages'] = $tbl->getPages();
$web['rectitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $tbl->getTotal() > 0 )
	$web['rectitle'] = '<span>&nbsp;&nbsp;[' . $tbl->getStart() . ' to ' . $tbl->getEnd() . ' out of ' . $tbl->getTotal() . ']</span>';

$no = 0;
foreach ( $rows as $rw )
{
	$web['rows'][$no] = $rw;
	$web['rows'][$no]['class'] = '';
	if ( date('Ymd') > $lib->format_date($rw['compliance_due_date'], 'Ymd') )
		$web['rows'][$no]['class'] = ' class="danger"';
	$web['rows'][$no]['compliance_due_date'] = $lib->format_date($rw['compliance_due_date'], 'd M Y');
	$web['rows'][$no]['percentage'] = 0;
	if ( $rw['total'] > 0 )
		$web['rows'][$no]['percentage'] = round($rw['filled'] / $rw['total'] * 100);
	if ( $web['rows'][$no]['percentage'] == 100 )
		$web['rows'][$no]['class'] = ' class="success"';
	$no++;
}

echo $twig->render('front-subsidiaries.html', array('web' => $web));
?>
