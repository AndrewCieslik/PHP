<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
//use app\forms\PersonSearchForm;

class ControlPanelCtrl {

    public function action_controlPanel() {
            // Nie ma potrzeby żadnej logiki w tym kontrolerze,
            // ponieważ chcesz tylko wyświetlić szablon ControlPanel.tpl.
            // Jeśli nie potrzebujesz żadnej logiki, możesz pozostawić tę funkcję pustą.
    }
}
App::getSmarty()->display('ControlPanel.tpl');
