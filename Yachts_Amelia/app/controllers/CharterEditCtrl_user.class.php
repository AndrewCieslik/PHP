<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\CharterEditForm_user;

class CharterEditCtrl_user {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CharterEditForm_user();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id_charter = ParamUtils::getFromRequest('id_charter', true, 'Błędne wywołanie aplikacji');
        $this->form->id_user = ParamUtils::getFromRequest('id_user', true, 'Błędne wywołanie aplikacji');
        $this->form->id_yacht = ParamUtils::getFromRequest('id_yacht', true, 'Błędne wywołanie aplikacji');
        $this->form->date_start = ParamUtils::getFromRequest('date_start', true, 'Błędne wywołanie aplikacji');
        $this->form->date_end = ParamUtils::getFromRequest('date_end', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        // if (empty(trim($this->form->name))) {
        //     Utils::addErrorMessage('Wprowadź imię');
        // }
        // if (empty(trim($this->form->surname))) {
        //     Utils::addErrorMessage('Wprowadź nazwisko');
        // }
        // if (empty(trim($this->form->phone))) {
        //     Utils::addErrorMessage('Wprowadź numer telefonu');
        // }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        // $d = \DateTime::createFromFormat('Y-m-d', $this->form->birthdate);
        // if ($d === false) {
        //     Utils::addErrorMessage('Zły format daty. Przykład: 2015-12-20');
        // }

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id_user = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_CharterNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_CharterEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("charters", "*", [
                    "id_charter" => $this->form->id_charter
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id_charter = $record['id_charter'];
                $this->form->id_user = $record['id_user'];
                $this->form->id_yacht = $record['id_yacht'];
                $this->form->date_start = $record['date_start'];
                $this->form->date_end = $record['date_end'];

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_CharterDelete() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("id_charter", [
                    "id_charter" => $this->form->id_charter
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('CharterList');
    }

    public function action_CharterSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                if ($this->form->id_user == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("charters");
                    if ($count <= 20) {
                        App::getDB()->insert("charters", [
                            "id_charter" => $this->form->id_charter,
                            "id_user" => $this->form->id_user,
                            "id_yacht" => $this->form->id_yacht,
                            "date_start" => $this->form->date_start,
                            "date_end" => $this->form->date_end
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("charters", [
                        "id_user" => $this->form->id_user,
                            "id_yacht" => $this->form->id_yacht,
                            "date_start" => $this->form->date_start,
                            "date_end" => $this->form->date_end
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

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('CharterList');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('CharterEdit_user.tpl');
    }

}
