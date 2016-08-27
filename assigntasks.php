<?php
$role = array('c');
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

if ( $session->get('roc_saq') == 'roc' )
	$roc_saq		= '';
else
	$roc_saq		= $session->get('roc_saq').'_';

$listscripts = explode("/", $_SERVER["HTTP_REFERER"]);
$web['source']			= $request->get('source', '');
$web['pagetitle']		= $web['company'].' - Data';
$web['table']			= 'customer';
$web['page']			= $web['source'];
$web['subpage']			= $web['source'];
$web['editscript']		= 'document_user_group.php';
$web['listscript']		= $request->get('listscript', $listscripts[count($listscripts)-1]);

$web['company_id']		= $session->get('company_id');
$web['title']			= str_replace('_', ' ', $web['version']).'Data';
$web['id']				= $request->get('id', '');
$web['task']			= $request->get('task', '');
$web['err']				= $request->get('err', '');
$web['pid']				= $request->get('pid', 0);
$web['requirements_id']	= $request->get('requirements_id', 0);
$web['inplace_filter']	= $request->get('inplace_filter', '');
$web['proc_req_search']	= $request->get('proc_req_search', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

if ( $web['source'] == 'usergroup' )
{
	$tbl = new table('user_group');
	$tbl->load($web['id']);
	$web['source_name'] = $tbl->getValue('user_group_name').' Group';
	unset($tbl);
	$sourcetable	= 'document_user_group';
	$field			= 'user_group_id';
}
if ( $web['source'] == 'assessor' )
{
	$tbl = new table('users');
	$tbl->load($web['id']);
	$web['source_name'] = $tbl->getValue('first_name').' '.$tbl->getValue('last_name');
	unset($tbl);
	$sourcetable	= 'document_assessor';
	$field			= 'assessor_id';
}

$tbl = new table('merchant_type');
$tbl->cols('t1.merchant_type');
$tbl->cols('t1.roc_saq');
$tbl->cols('c.company_name');
$tbl->cols('c.compliance_due_date');
$tbl->join('customer','c.merchant_type_id','t1.id', 'c');
$tbl->condition('WHERE', 'c.id', $web['company_id']);
$rows = $tbl->getList();
if ( count($rows) > 0 )
{
	$web['company_name'] = $rows[0]['company_name'];
	$web['merchant_type'] = $rows[0]['merchant_type'];
	$web['roc_saq'] = $rows[0]['roc_saq'];
	$web['compliance_due_date'] = $rows[0]['compliance_due_date'];
	$dArr 	= explode('-', $rows[0]['compliance_due_date']);
	$c_due_date = date("Y-m-d", mktime(0, 0, 0, $dArr[1], $dArr[2], $dArr[0]));
	$next_dt = date('Y-m-d', strtotime("+".$web['settings']['failed_task_due_date']['value']." day"));
	if(strtotime($c_due_date) >  strtotime($next_dt) )
		$completion_dt = $next_dt;
	else
		$completion_dt = date('Y-m-d', strtotime('-1 day', strtotime($c_due_date)));

}	
unset($tbl);

$tbl = new table($sourcetable);
if ( $web['task'] == 'save' || $web['task'] == 'continue' )
{
	for($r=1; $r<=12; $r++)
	{
		$web['data']	= $request->get('data'.$r, '');
		if ( $web['data'] == 'y' )
		{
			$sql  = "DELETE FROM $sourcetable WHERE $field = ?";
			$sql .= "AND document_id IN(SELECT id FROM document WHERE requirements_id = ?)";
			$params = array($web['id'], $r);
			$tbl->execute($sql, $params);

			$web['doc_id']	= $request->get('doc_id'.$r, array());
			foreach($web['doc_id'] as $doc_id)
			{
				$tbl->setValue('id', 0);
				$tbl->setValue('document_id', $doc_id);
				$tbl->setValue($field, $web['id']);
				$tbl->setValue('company_id', $web['company_id']);
				$tbl->save();
				if ( $web['source'] == 'usergroup' )
				{
					$doc_tbl = new table('document');
					$doc_tbl->load($doc_id);
					$doc_tbl->setValue('ready_for','u');
					$doc_tbl->setValue('completion_date', $completion_dt);
					$doc_tbl->save();
				}
			}
		}
	}
}

if ( $web['task'] != 'save' )
{
	$tbl = new table('document');
	$tbl->cols('r.id');
	$tbl->cols('r.title AS rtitle');
	$tbl->join($web['version'].$roc_saq.'requirements', 'r.id', 't1.requirements_id', 'r', 'JOIN');
	$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
	$tbl->groupby('r.id');
	$web['requirements'] = $tbl->getList();
	$web['merchant_id'] = 0;
	if ( $web['requirements_id'] == 0 )
		$web['requirements_id'] = $web['requirements'][0]['id'];
	unset($tbl);

	$web['rows'] = array();
	getAssignTask();
}

echo $twig->render('front-assigntasks.html', array('web' => $web));
