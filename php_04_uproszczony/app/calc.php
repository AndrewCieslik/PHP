<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//pobranie parametrów
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

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');