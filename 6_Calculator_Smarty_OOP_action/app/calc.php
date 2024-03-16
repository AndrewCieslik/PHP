<?php
require_once dirname(__FILE__).'/../config.php';

action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

$ctrl = new CalcCtrl();
$ctrl->process();
