<?php
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
require(dirname(__FILE__).'/config/config.new.php');
if ( !isset($role) ) $role = array('c', 'u', 'q', 's', 'a');
if ( !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");

$id			= $request->get('id', 0);
$document		= $request->get('document', '');
$company_id	= $request->get('company_id', '');
$pid			= $request->get('pid', '');
$path		= '/uploads/documents/'.$company_id.'/';

$tbl = new table('procedure_document');
if ( file_exists($path.$document) )
	unlink($path.$document);
	
$params = array($id);
$sql = "DELETE FROM ".$tbl->getPrefix()."procedure_document WHERE id = ?";
$tbl->execute($sql, $params);	
add_log_history('DEL', 'DOC', $session->get('uid'), $session->get('userrole') );

$tbl->cols('t1.*');
$tbl->condition('WHERE','t1.company_id', $request->get('company_id') );
$tbl->condition('AND','t1.procedure_id', $pid	 );
$docs 	= $tbl->getList();
$extra = '';
if ( count($docs) == 0 ) $extra = ' disabled';
$html = '<button '.$extra.' class="btn btn-default" id="dLabe" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
$html .= 'Documents';
$html .= '<span class="caret"></span>';
$html .= '</button>';
$html .= '<ul class="dropdown-menu" id="documents" role="menu" aria-labelledby="dLabel">';
foreach( $docs as $rw1 )
	$html .= '	<li><a class="pull-left" href="/uploads/documents/'.$company_id.'/'.$rw1['document'].'" target="_blank">'.$rw1['document'].'&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-save"></span></a><a href="javascript:deletedoc(\''.$rw1['id'].'\', \''.$rw1['document'].'\', \''.$company_id.'\', \''.$pid.'\');" class="pull-right"><span class="glyphicon glyphicon-remove text-danger"></span></a></li>';
	
$html .= '</ul>';
echo $html;
?>