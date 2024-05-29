<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\YachtEditForm;

class YachtEditCtrl {
    private $form;
    public function __construct() {
        $this->form = new YachtEditForm();
    }
    public function validateSave() {
        $this->form->id_yacht = ParamUtils::getFromRequest('id_yacht', true, 'Błędne wywołanie aplikacji');
        $this->form->model = ParamUtils::getFromRequest('model', true, 'Błędne wywołanie aplikacji');
        $this->form->yacht_name = ParamUtils::getFromRequest('yacht_name', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }
    public function validateEdit() {
        $this->form->id_yacht = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
    public function action_yachtNew() {
        $this->generateView();
    }
    public function action_yachtEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("yachts", "*", [
                    "id_yacht" => $this->form->id_yacht
                ]);
                $this->form->id_yacht = $record['id_yacht'];
                $this->form->model = $record['model'];
                $this->form->yacht_name = $record['yacht_name'];

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_yachtDelete() {
        if ($this->validateEdit()) {
            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("yachts", [
                    "id_yacht" => $this->form->id_yacht
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('yachtList');
    }
    public function action_yachtSave() {
        if ($this->validateSave()) {
            try {

                //2.1 Nowy rekord
                if ($this->form->id_yacht == '') {
                    $count = App::getDB()->count("yachts");
                    if ($count <= 30) {
                        App::getDB()->insert("yachts", [
                            "model" => $this->form->model,
                            "yacht_name" => $this->form->yacht_name,
                        ]);
                    } else {
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit();
                    }
                } else {
                    App::getDB()->update("yachts", [
                        "model" => $this->form->model,
                        "yacht_name" => $this->form->yacht_name
                            ], [
                        "id_yacht" => $this->form->id_yacht
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('yachtList');
        } else {
            $this->generateView();
        }
    }
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('YachtEdit.tpl');
    }
}
