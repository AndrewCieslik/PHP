<?php

namespace app\controllers;

use app\forms\HomeForm;
use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class home {

    private $form;

    public function __construct() {
        $this->form = new HomeForm();
    }

    public function action_home() {
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('home.tpl');
    }
}
