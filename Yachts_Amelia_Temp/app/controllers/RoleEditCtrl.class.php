<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\RoleEditForm;

class RoleEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        $this->form = new RoleEditForm();
    }
    public function validateSave() {
        $this->form->id_role = ParamUtils::getFromRequest('id_role');
        $this->form->role = ParamUtils::getFromRequest('role');

        if (App::getMessages()->isError())
            return false;

        if (empty(trim($this->form->role))) {
            Utils::addErrorMessage('Wprowadź model');
        }

        if (App::getMessages()->isError())
            return false;
        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id_role = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_roleNew() {
        $this->generateView();
    }

    public function action_roleEdit() {

        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("roles", "*", [
                    "id_role" => $this->form->id_role
                ]);
                $this->form->id_role = $record['id_role'];
                $this->form->role = $record['role'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_roleDelete() {
        if ($this->validateEdit()) {
            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("roles", [
                    "id_role" => $this->form->id_role
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('roleList');
    }

    public function action_roleSave() {
        if ($this->validateSave()) {
            try {
                //Nowy rekord
                if ($this->form->id_role == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 10
                    $count = App::getDB()->count("roles");
                    if ($count <= 10) {
                        App::getDB()->insert("roles", [
                            "role" => $this->form->role,
                        ]);
                    } else {
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView();
                        exit();
                    }
                } else {
                    //Edycja rekordu o danym ID
                    App::getDB()->update("roles", [
                        "role" => $this->form->role
                            ], [
                        "id_role" => $this->form->id_role
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('roleEdit');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('RoleEdit.tpl');
    }

}
