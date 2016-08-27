<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
	
$company_id 	= $request->get('company_id', 0);
$document_id 	= $request->get('document_id', 0);
echo $company_id;
echo $document_id;exit;
$reason_of_failure 	= $request->get('reason_of_failure', 0);
$ready_for 	= $request->get('ready_for', 'q');
$tbl= new table('customer');
$tbl->load($company_id);
$date2 = $tbl->getValue('c_due_date');
$dArr=explode('-', $date2);
$c_due_date = date("Y-m-d", mktime(0, 0, 0, $dArr[1], $dArr[2], $dArr[0]));
unset($tbl);
$next_dt = date('Y-m-d', strtotime("+".$web['settings']['failed_task_due_date']['value']." day"));
if(strtotime($c_due_date) >  strtotime($next_dt) )
		$completion_dt = $next_dt;
	else
		$completion_dt = date('Y-m-d', strtotime('-1 day', strtotime($c_due_date)));
$tbl = new table('document');
$tbl->condition('WHERE', 't1.company_id',$company_id);
$tbl->condition('AND', 't1.procedure_id',$document_id);
$row = $tbl->getList();

	foreach($row as $rw){
		$tbl->load($document_id);
		$tbl->setValue('updated_on', date('Y-m-d'));
		$tbl->setValue('updated_by', 's');
		$tbl->setValue('ready_for', $ready_for);
		$tbl->setValue('completion_date', $completion_dt);
		$tbl->setValue('reason_of_failure', $reason_of_failure);
		$tbl->save();
		unset($tbl);
	}	

echo "success";
?>