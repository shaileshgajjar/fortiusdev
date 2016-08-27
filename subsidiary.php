<?php
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$listscripts = explode("/", $_SERVER["HTTP_REFERER"]);
$web['pagetitle']	= $web['company'].' - Subsidiary';
$web['table']		= 'customer';
$web['page']		= 'subsidiaries';
$web['subpage']	= 'subsidiary';
$web['editscript']	= 'subsidiary.php';
$web['listscript']	= $request->get('listscript', $listscripts[count($listscripts)-1]);

$web['id']		= $request->get('id', '0');
$web['task']		= $request->get('task', '');
$web['err']		= $request->get('err', '');
$web['title']		= 'Subsidiary '.($web['id'] == '0' ? 'New' : 'Edit');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 10);
$web['sb']	= $request->get('sb', 'customer_owner');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');
$web['fields'] = array();
$web['fields']['merchant_type_id']		= array('value' => '0');
$web['fields']['qsa_id']				= array('value' => '0');
$web['fields']['qa_id']					= array('value' => '0');
$web['fields']['company_name']			= array('value' => '');
$web['fields']['company_address']		= array('value' => '');
$web['fields']['company_url']			= array('value' => '');
$web['fields']['compliance_due_date']	= array('value' => '');
$web['fields']['start_date']			= array('value' => '');
$web['fields']['end_date']				= array('value' => '');
$web['fields']['assr_company_name']		= array('value' => '');
$web['fields']['assr_company_address']	= array('value' => '');
$web['fields']['assr_company_url']		= array('value' => '');
$web['fields']['parent_id']			= array('value' => '');
$web['users'] = array();
$web['users']['title']					= array('value' => '');
$web['users']['first_name']				= array('value' => '');
$web['users']['last_name']				= array('value' => '');
$web['users']['mobile']					= array('value' => '');
$web['users']['email']					= array('value' => '');

$web['parent_id'] = $web['profile']['company_id']['value'];
$web['tbl'] = new table($web['table']);
$user = new table('users');
if ( $web['id'] > 0 )
{
	$web['tbl']->load($web['id']);
	$user->find('company_id', $web['id']);
}

// get data from settings
$settings = new table('settings');
$settings->load(1);
$web['tbl']->setValue('assr_company_name', $settings->getValue('assr_company_name'));
$web['tbl']->setValue('assr_company_address', $settings->getValue('assr_company_address'));
$web['tbl']->setValue('assr_company_url', $settings->getValue('assr_company_url'));
unset($settings);

if ( $web['task'] == 'save' )
{
	$web['err'] = '';
	foreach($web['fields'] as $key => $value)
		$web['tbl']->setValue($key, $request->get($key, ''));
	$found = $user->find('email', $request->get('email', ''));
	if ( $found )
	{
		if ( $web['id'] == 0 )
			$web['err'] = 'User is already exists with same email address';
		if ( $web['id'] != $user->getValue('company_id') )
			$web['err'] = 'User is already exists with same email address';
	}
	foreach($web['users'] as $key => $value)
		$user->setValue($key, $request->get($key, ''));

	if ( $web['err'] == '' )
	{
		$ary = explode('-', $web['tbl']->getValue('compliance_due_date'));
		$web['tbl']->setValue('compliance_due_date', $ary[2].'-'.$ary[0].'-'.$ary[1]);
		$ary = explode('-', $web['tbl']->getValue('start_date'));
		$web['tbl']->setValue('start_date', $ary[2].'-'.$ary[0].'-'.$ary[1]);
		$ary = explode('-', $web['tbl']->getValue('end_date'));
		$web['tbl']->setValue('end_date', $ary[2].'-'.$ary[0].'-'.$ary[1]);
		$web['tbl']->save();
		$primary_id = $web['tbl']->getValue('id');
		$merchant_type_id = $web['tbl']->getValue('merchant_type_id');
		
		$user->find('company_id', $primary_id);
		foreach($web['users'] as $key => $value)
			$user->setValue($key, $request->get($key, ''));
		$user->setValue('company_id', $primary_id);
		$pwd = $request->get('pwd', '');
		if ( $pwd != '' )
			$user->setValue('pwd', md5($pwd));
		$user->setValue('userrole', 'c');
		$user->save();
		
		$document = new table('document');
		$found = $document->find('company_id', $primary_id);
		if ( !$found )
		{
			$omerchant_type = new table('merchant_type');
			$omerchant_type->load($merchant_type_id);
			$merchant_type = $omerchant_type->getValue('roc_saq');
			$roc_saq = ($merchant_type == 'roc' ? '' : '_saq');
			unset($omerchant_type);

			if ( $merchant_type == 'saq' )
			{
				$opm = new table('procedure_merchant');
				$opm->cols('t1.procedure_id, p.requirements_id, p.sub_requirements_id');
				$opm->join($web['version'].$roc_saq.'procedure', 't1.procedure_id', 'p.id', 'p', 'JOIN');
				$opm->condition('WHERE', 't1.merchant_id', $merchant_type_id);
			}
			else
			{
				$opm = new table($web['version'].$roc_saq.'procedure');
				$opm->cols('t1.id as procedure_id, t1.requirements_id, t1.sub_requirements_id');
			}
			$rows = $opm->getList();
			foreach( $rows as $row )
			{
				$document->setValue('id', 0);
				$document->setValue('company_id', $primary_id);
				$document->setValue('procedure_id', $row['procedure_id']);
				$document->setValue('requirements_id', $row['requirements_id']);
				$document->setValue('sub_requirements_id', $row['sub_requirements_id']);
				$document->setValue('roc_saq', $merchant_type);
				$document->save();
			}
			unset($opm);
		}
		$act = ($web['id'] == 0)?'ADD':'EDIT';
		add_log_history($act, 'CUST', $session->get('uid'), $session->get('userrole'));
	}
}

foreach($web['fields'] as $key => $value)
	$web['fields'][$key]['value'] = $web['tbl']->getValue($key);
$web['fields']['compliance_due_date']['value'] = ($web['fields']['compliance_due_date']['value'])?$lib->format_date($web['fields']['compliance_due_date']['value'], 'm-d-Y'):date('m-d-Y');	
$web['fields']['start_date']['value'] = ($web['fields']['start_date']['value'])?$lib->format_date($web['fields']['start_date']['value'], 'm-d-Y'):date('m-d-Y');
$day_of_mon =  (date('d') == 1)? date('t', mktime(0, 0, 0, date('m')-1, 1, date('y')+1)):date('d')-1;
$end_date = mktime(0, 0, 0, date('m'), $day_of_mon, date('y')+1);
$end_date =  date('m-d-Y', $end_date);
$web['fields']['end_date']['value'] = ($web['fields']['end_date']['value'])?$lib->format_date($web['fields']['end_date']['value'], 'm-d-Y'):$end_date;

foreach($web['users'] as $key => $value)
	$web['users'][$key]['value'] = $user->getValue($key);
unset($web['tbl']);
unset($user);

$conditions[] = array('type' => 'WHERE', 'field' => '(userrole', 'value' => 'q');
$conditions[] = array('type' => 'OR', 'field' => 'userrole', 'value' => 's)');
$web['qsas'] = getdropdown('users', 'id', "CONCAT(first_name, ' ', last_name) as qsa", $web['fields']['qsa_id']['value'], $conditions);
$web['qas'] = getdropdown('users', 'id', "CONCAT(first_name, ' ', last_name) as qsa", $web['fields']['qa_id']['value'], $conditions);
$web['merchant_types'] = getdropdown('merchant_type', 'id', "merchant_type", $web['fields']['merchant_type_id']['value']);

echo $twig->render('front-subsidiary.html', array('web' => $web));
?>
