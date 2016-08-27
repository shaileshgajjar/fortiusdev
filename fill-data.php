<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$listscripts = explode("/", $_SERVER["HTTP_REFERER"]);
$web['pagetitle']		= $web['company'].' - Data';
$web['table']			= 'customer';
$web['page']			= 'inputs';
$web['editscript']		= 'fill-data.php';
$web['listscript']		= $listscripts[count($listscripts)-1];
if ( $web['listscript'] == 'fill-data.php' )
	$web['listscript']	= 'list-data.php';

$web['title']			= str_replace('_', ' ', $web['version']).'Data';
$web['id']				= $request->get('id', '');
$web['task']			= $request->get('task', '');
$web['err']				= $request->get('err', '');
$web['pid']				= $request->get('pid', 0);
$web['requirements_id']	= $request->get('requirements_id', 0);
$web['filter_id']		= $request->get('filter_id', 0);
$web['inplace_filter']		= $request->get('inplace_filter', '');
$web['proc_req_search']		= $request->get('proc_req_search', '');
$web['company_id']		= $web['id'];

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

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

$roc_saq = ($web['roc_saq'] == 'roc') ? '' : 'saq_';

if ( $web['task'] == 'save' || $web['task'] == 'continue' )
{
	$tbl = new table('document');
	$docrep = new table('document_reporting');
	$tbl->cols('t1.id');
	$tbl->cols('t1.procedure_id');
	$tbl->cols('t1.requirements_id');
	$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
	$rows = $tbl->getList();
	$proc_inplace = false;
	$proc_ccw = false;
	$proc_report = false;
	foreach($rows as $rw)
	{
		$data = $request->get('data'.$rw['requirements_id'], 'n');
		if ( $data == 'y' )
		{
			$tbl->load($rw['id']);
			$tbl->setValue('inplace', $request->get('opt'.$rw['procedure_id'], ''));
			$tbl->setValue('constraints', $request->get('constraints'.$rw['procedure_id'], ''));
			$tbl->setValue('objective', $request->get('objective'.$rw['procedure_id'], ''));
			$tbl->setValue('risk', $request->get('risk'.$rw['procedure_id'], ''));
			$tbl->setValue('dcontrols', $request->get('dcontrols'.$rw['procedure_id'], ''));
			$tbl->setValue('vcontrols', $request->get('vcontrols'.$rw['procedure_id'], ''));
			$tbl->setValue('maintenance', $request->get('maintenance'.$rw['procedure_id'], ''));
			$tbl->setValue('ready_for', 'q');
			$tbl->save();
			if($tbl->getValue('inplace') != '')
				$proc_inplace = true;
			if( $tbl->getValue('constraints') != '' || $tbl->getValue('objective') != '' || $tbl->getValue('risk') != '' || $tbl->getValue('dcontrols') != '' || $tbl->getValue('vcontrols') != '' || $tbl->getValue('maintenance') != '' )
				$proc_ccw = true;

			$doc_id = $rw['id'];
			$rep_ids	= $request->get('rep_id'.$doc_id, array());
			$comments	= $request->get('doc_report_input'.$doc_id, array());
			$d = 0;
			foreach($rep_ids as $rep_id)
			{
				$comment = '';
				if ( isset($comments[$d]) ) $comment = $comments[$d];
				$found = $docrep->find(array('document_id', 'reporting_id'), array($doc_id, $rep_id));
				if ( !$found ) $docrep->setValue('id', 0);
				$docrep->setValue('document_id', $doc_id);
				$docrep->setValue('reporting_id', $rep_id);
				$docrep->setValue('comment', $comment);
				$docrep->setValue('company_id', $web['company_id']);
				$docrep->save();
				$d++;
				$proc_report = true;
			}
			
			// save filters
			if ( $session->get('userrole') == 's' || $session->get('userrole') == 'q' || $session->get('userrole') == 'i' )
			{
				$df = new table('document_filter');
				$df->delete(array('document_id', 'user_id'), array($doc_id, $session->get('uid')));
				$filters = $request->get('filter'.$doc_id, array());
				foreach($filters as $filter_id)
				{
					$df->setValue('id', 0);
					$df->setValue('document_id', $doc_id);
					$df->setValue('filter_id', $filter_id);
					$df->setValue('user_id', $session->get('uid'));
					$df->setValue('company_id', $web['company_id']);
					$df->save();
				}
			}
			
			if ( $session->get('userrole') == 's' || $session->get('userrole') == 'q' )
			{
				 //starts save interviewer employee
				 $docint = new table('document_interviewer');
				 $docint->delete(array('document_id', 'company_id'), array($doc_id, $web['company_id']));
				 $interviewer = $request->get($doc_id.'_int_id',array());
				 if(count($interviewer) > 0) {
					 foreach($interviewer as $key => $val){
						$docint->setValue('id', 0);
						$docint->setValue('company_id', $web['company_id']);
						$docint->setValue('document_id', $doc_id);
						$docint->setValue('interviewer_id', $val);
						$docint->save();
					 }
				}
				//ends save interviewer employee
				//starts save sample sets 
				$samples = new table('document_samplesets');
				$samples->delete(array('document_id', 'company_id'), array($doc_id, $web['company_id']));
				$samplesets = $request->get($doc_id.'_set_id',array());
				 if(count($samplesets) > 0) {
					 foreach($samplesets as $key => $val){
						$samples->setValue('id', 0);
						$samples->setValue('company_id', $web['company_id']);
						$samples->setValue('document_id', $doc_id);
						$samples->setValue('set_id', $val);
						$samples->save();
					 }
				}
				//ends save sample sets 
				//starts save assigned docs
				$docs = new table('document_docsfiles');
				$docs->delete(array('document_id', 'company_id'), array($doc_id, $web['company_id']));
				$docfiles = $request->get($doc_id.'_doc_id', array());
				 if(count($docfiles) > 0) {
					 foreach($docfiles as $key => $val){
						$docs->setValue('id', 0);
						$docs->setValue('company_id', $web['company_id']);
						$docs->setValue('document_id', $doc_id);
						$docs->setValue('docfile_id', $val);
						$docs->save();
					 }
				}
				//ends save assigned docs
				
			}
		}
	}
	unset($tbl);
	unset($docrep);
	unset($docint);
	unset($samples);
	unset($docs);
	if($proc_inplace) add_log_history('EDIT', 'PROC_INPLACE', $session->get('uid'), $session->get('userrole') );
	if($proc_ccw) add_log_history('EDIT', 'PROC_CCW', $session->get('uid'), $session->get('userrole'));
	if($proc_report) add_log_history('EDIT', 'DR', $session->get('uid'), $session->get('userrole'));
	add_log_history('EDIT', 'PROC', $session->get('uid'), $session->get('userrole'));
}

if ( $web['task'] != 'save' )
{

	$tbl = new table('document');
	$tbl->cols('r.id');
	$tbl->cols('r.title AS rtitle');
	$tbl->join($web['version'].$roc_saq.'requirements', 'r.id', 't1.requirements_id', 'r', 'JOIN');
	$tbl->condition('WHERE', 't1.company_id', $web['company_id']);
	$tbl->groupby('r.id');
	
	if ( $session->get('userrole') == 's' )
		$tbl->join('document_assessor', 'da.document_id', "t1.id AND da.assessor_id = '".$session->get('uid')."'", 'da', 'JOIN');
	$web['requirements'] = $tbl->getList();
	$web['merchant_id'] = 0;
	
	if ( $web['requirements_id'] == 0 )
		$web['requirements_id'] = $web['requirements'][0]['id'];
	
	
	unset($tbl);
	
	$web['rows'] = array();
	$web['reports'] = array();
	getContentData();
	
	$web['filters'] = '';
	if ( $session->get('userrole') == 's' || $session->get('userrole') == 'q' || $session->get('userrole') == 'i' )
	{
		$conditions[0] = array('type' => 'WHERE', 'field' => 'user_id', 'value' => $session->get('uid'));
		$web['filters'] .= getdropdown('filter', 'id', 'filter_name', $web['filter_id'], $conditions);
	}

}
echo $twig->render('front-fill-data.html', array('web' => $web));
?>