<?php
// define('_SERVER_NAME', 'localhost:80');
//define('_SERVER_URL', 'http://'._SERVER_NAME);
// define('_APP_ROOT', '/PHP/5_Domainer_Temp_Smarty_OOP');
// define('_APP_URL', _SERVER_URL._APP_ROOT);
// define("_ROOT_PATH", dirname(__FILE__)); 

require_once 'Config.class.php';

$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/PHP/5_Domainer_Temp_Smarty_OOP';
$conf->app_url = $conf->server_url.$conf->app_root;