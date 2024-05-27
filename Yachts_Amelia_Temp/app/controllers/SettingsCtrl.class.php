<?php

namespace app\controllers;

use core\App;
class SettingsCtrl {


    public function __construct() {
    }

    public function validate() {
        return true;
    }

    public function action_settings() {
        App::getSmarty()->display('Settings.tpl');
    }
}
