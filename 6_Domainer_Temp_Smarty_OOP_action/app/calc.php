<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path. '/lib/smarty/Smarty.class.php';

//załaduj kontroler
require_once $conf->root_path.'/app/CalcCtrl.class.php';

$ctrl = new CalcCtrl();
$ctrl->process();
