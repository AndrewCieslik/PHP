<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/PHP/2_CreditCalculator_Secured');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));
define('_BACKGROUND_IMAGE_URL', _APP_URL . '/images/background.jpg');


function out(&$param){
	if (isset($param)){
		echo $param;
	}
}
