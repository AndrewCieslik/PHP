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
        //stworzenie potrzebnych obiektów
        $this->form = new RoleEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id_role = ParamUtils::getFromRequest('id_role');
        $this->form->role = ParamUtils::getFromRequest('role');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->role))) {
            Utils::addErrorMessage('Wprowadź model');
        }

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
        $this->form->id_role = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_roleNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_roleEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("roles", "*", [
                    "id_role" => $this->form->id_role
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id_role = $record['id_role'];
                $this->form->role = $record['role'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_roleDelete() {
        // 1. walidacja id osoby do usuniecia
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

        // 3. Przekierowanie na stronę listy osób jachtów
        App::getRouter()->forwardTo('roleList');
    }

    public function action_roleSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                if ($this->form->id_role == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("roles");
                    if ($count <= 20) {
                        App::getDB()->insert("roles", [
                            "role" => $this->form->role,
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
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

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('roleEdit');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('RoleEdit.tpl');
    }

}
