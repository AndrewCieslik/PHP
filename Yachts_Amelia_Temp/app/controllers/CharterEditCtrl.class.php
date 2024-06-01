<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\CharterEditForm;

class CharterEditCtrl {
    private $form;
    public function __construct() {
        $this->form = new CharterEditForm();
    }
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id_charter = ParamUtils::getFromRequest('id_charter', true, 'Błędne wywołanie aplikacji');
        $this->form->id_user = ParamUtils::getFromRequest('id_user', true, 'Błędne wywołanie aplikacji');
        $this->form->id_yacht = ParamUtils::getFromRequest('id_yacht', true, 'Błędne wywołanie aplikacji');
        $this->form->date_start = ParamUtils::getFromRequest('date_start', true, 'Błędne wywołanie aplikacji');
        $this->form->date_end = ParamUtils::getFromRequest('date_end', true, 'Błędne wywołanie aplikacji');
        $this->form->approved = ParamUtils::getFromRequest('approved', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        if (App::getMessages()->isError())
            return false;

        $d = \DateTime::createFromFormat('Y-m-d', $this->form->date_start);
        if ($d === false) {
            Utils::addErrorMessage('Zły format daty. Przykład: 2015-12-20');
        }
        $d = \DateTime::createFromFormat('Y-m-d', $this->form->date_end);
        if ($d === false) {
            Utils::addErrorMessage('Zły format daty. Przykład: 2015-12-20');
        }

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id_charter = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_CharterNew() {
        $this->generateView();
    }

    public function action_CharterEdit() {
        if ($this->validateEdit()) {
            try {
//                $record = App::getDB()->get("charters", "*", [
//                    "id_charter" => $this->form->id_charter
//                ]);
//                $this->form->id_charter = $record['id_charter'];
//                $this->form->id_user = $record['id_user'];
//                $this->form->id_yacht = $record['id_yacht'];
//                $this->form->date_start = $record['date_start'];
//                $this->form->date_end = $record['date_end'];
//                $this->form->approved = $record['approved'];
                $record = App::getDB()->get("charters", [
                    "[>]yachts" => ["id_yacht" => "id_yacht"]
                ], [
                    "charters.id_charter",
                    "charters.id_user",
                    "charters.id_yacht",
                    "charters.date_start",
                    "charters.date_end",
                    "charters.approved",
                    "yachts.yacht_name"
                ], [
                    "charters.id_charter" => $this->form->id_charter
                ]);
                if ($record) {
                    $this->form->id_charter = $record['id_charter'];
                    $this->form->id_user = $record['id_user'];
                    $this->form->id_yacht = $record['id_yacht'];
                    $this->form->yacht_name = $record['yacht_name'];
                    $this->form->date_start = $record['date_start'];
                    $this->form->date_end = $record['date_end'];
                    $this->form->approved = $record['approved'];
                } else {
                    Utils::addErrorMessage('Nie znaleziono charteru o podanym ID.');
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        $this->generateView();
    }

    public function action_CharterDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("charters", [
                    "id_charter" => $this->form->id_charter
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('charterList');
    }

    public function action_CharterSave() {

        if ($this->validateSave()) {
            try {
                //Nowy rekord
                if ($this->form->id_charter == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 200
                    $count = App::getDB()->count("charters");
                    if ($count <= 200) {
                        App::getDB()->insert("charters", [
                            "id_user" => $this->form->id_user,
                            "id_yacht" => $this->form->id_yacht,
                            "date_start" => $this->form->date_start,
                            "date_end"  => $this->form->date_end,
                            "approved" => $this->form->approved
                        ]);
                    } else {
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit();
                    }
                } else {
                    //Edycja rekordu o danym ID
                    App::getDB()->update("charters", [
                        "id_user" => $this->form->id_user,
                        "id_yacht" => $this->form->id_yacht,
                        "date_start" => $this->form->date_start,
                        "date_end" => $this->form->date_end,
                        "approved" => $this->form->approved
                            ], [
                        "id_charter" => $this->form->id_charter
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('charterList');
        } else {
            $this->generateView();
        }
    }
    public function generateView() {
        try {
            $yachts = App::getDB()->select("yachts", ["id_yacht", "yacht_name"]);
            App::getSmarty()->assign('yachts', $yachts);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania listy jachtów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('CharterEdit.tpl');
    }

}
