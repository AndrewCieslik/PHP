<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\LogForm;

class LogCtrl {

    private $form;

    public function __construct() {
        $this->form = new LogForm();
    }

    public function validate() {
        $this->form->logFile = ParamUtils::getFromRequest('logFile');
        if (!isset($this->form->logFile) || strlen($this->form->logFile) == 0) {
            $this->form->logFile = 'logs.txt'; // Domyślny plik logów
        }
        return !App::getMessages()->isError();
    }

    public function action_logList() {
        $this->validate();

        $logContent = [];
        $logFilePath = $this->form->logFile;

        if (file_exists($logFilePath)) {
            $handle = fopen($logFilePath, "r");

            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    $logContent[] = htmlspecialchars($line);
                }
                fclose($handle);
            } else {
                Utils::addErrorMessage('Nie można otworzyć pliku logów.');
            }
        } else {
            Utils::addErrorMessage('Plik logów nie istnieje.');
        }

        App::getSmarty()->assign('logContent', $logContent);
        App::getSmarty()->assign('logForm', $this->form);
        App::getSmarty()->display('LogList.tpl');
    }
}
