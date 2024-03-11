<?php
require_once __DIR__ . '/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


$credit = $_REQUEST['credit'];
$percent = $_REQUEST['percent'];
$years = $_REQUEST['years'];

switch (true) {
    case !isset($credit) || !isset($percent) || !isset($years):
        $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
        break;
    case $credit == "":
        $messages[] = 'Nie podano kwoty kredytu';
        break;
    case $percent == "":
        $messages[] = 'Nie podano oprocentowania';
        break;
    case $years == "":
        $messages[] = 'Nie podano liczby lat';
        break;
}

if (empty($messages)) {
    $credit = (float) $credit;
    $percent = (float) $percent;
    $years = (int) $years;

    $monthly = ($credit + ($percent * $credit / 100)) / ($years * 12);
    $result = number_format($monthly, 2, '.', '');
}

$smarty->display(_ROOT_PATH.'/app/calc_view.tpl');