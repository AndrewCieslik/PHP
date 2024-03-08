<?php
require_once __DIR__ . '/../config.php';

include _ROOT_PATH.'/app/security/check.php';
function getParams(&$credit,&$percent,&$years){
	$credit = isset($_REQUEST['credit']) ? $_REQUEST['credit'] : null;
	$percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;	
}

function validate(&$credit,&$percent,&$years,&$messages){
	if ( ! (isset($credit) && isset($percent) && isset($years))) {
		return false;
	}
	if ( $credit == "") {
		$messages [] = 'Add credit value';
	}
	if ( $percent == "") {
		$messages [] = 'Add the interest rate';
	}
	if ( $years == "") {
		$messages [] = 'Add the number of years';
	}
	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$credit,&$percent,&$years,&$messages,&$result){
	global $role;
	
	$credit = (float) $credit;
    $percent = (float) $percent;
    $years = (int) $years;
	
	$monthly = ($credit + ($percent * $credit / 100)) / ($years * 12);
    $result = number_format($monthly, 2, '.', '');
}

$credit = null;
$percent = null;
$years = null;
$result = null;
$messages = array();

getParams($credit,$percent,$years);
if ( validate($credit,$percent,$years,$messages) ) { 
	process($credit,$percent,$years,$messages,$result);
}

include 'calc_view.php';