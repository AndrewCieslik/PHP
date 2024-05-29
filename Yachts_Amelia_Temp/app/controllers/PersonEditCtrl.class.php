<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\PersonEditForm;

class PersonEditCtrl {
    private $form;

    public function __construct() {
        $this->form = new PersonEditForm();
    }
    public function validateSave() {
        $this->form->id_user = ParamUtils::getFromRequest('id_user', true, 'Błędne wywołanie aplikacji');
        $this->form->name = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
        $this->form->surname = ParamUtils::getFromRequest('surname', true, 'Błędne wywołanie aplikacji');
        $this->form->phone = ParamUtils::getFromRequest('phone', true, 'Błędne wywołanie aplikacji');
        $this->form->password = ParamUtils::getFromRequest('password');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->name))) {
            Utils::addErrorMessage('Wprowadź imię');
        }
        if (empty(trim($this->form->surname))) {
            Utils::addErrorMessage('Wprowadź nazwisko');
        }
        if (empty(trim($this->form->phone))) {
            Utils::addErrorMessage('Wprowadź numer telefonu');
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }
    public function validateEdit() {
        $this->form->id_user = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_personNew() {
        $this->generateView();
    }
    public function action_personEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("users", [
                    "[>]passwords" => ["id_user" => "id_user"]
                ], [
                    "users.id_user",
                    "users.name",
                    "users.surname",
                    "users.phone",
                    "passwords.password"
                ], [
                    "users.id_user" => $this->form->id_user
                ]);

                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                if ($record) {
                    $this->form->id_user = $record['id_user'];
                    $this->form->name = $record['name'];
                    $this->form->surname = $record['surname'];
                    $this->form->phone = $record['phone'];
                    $this->form->password = $record['password'];
                } else {
                    Utils::addErrorMessage('Nie znaleziono użytkownika o podanym ID.');
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_personDelete() {
        if ($this->validateEdit()) {
            try {
                // Rozpoczęcie transakcji
                App::getDB()->pdo->beginTransaction();

                App::getDB()->delete("passwords", [
                    "id_user" => $this->form->id_user
                ]);

                App::getDB()->delete("users", [
                    "id_user" => $this->form->id_user
                ]);

                App::getDB()->pdo->commit();

                Utils::addInfoMessage('Pomyślnie usunięto rekord');

            } catch (\PDOException $e) {
                App::getDB()->pdo->rollBack();
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        App::getRouter()->forwardTo('personList');
    }

    public function action_personSave() {
        if ($this->validateSave()) {
            // Zapis danych w bazie
            try {
                //Nowy rekord
                if ($this->form->id_user == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 200
                    $count = App::getDB()->count("users");
                    if ($count <= 200) {
                        App::getDB()->pdo->beginTransaction();
                            App::getDB()->insert("users", [
                                "name" => $this->form->name,
                                "surname" => $this->form->surname,
                                "phone" => $this->form->phone
                            ]);
                            App::getDB()->insert("passwords", [
                                "password" => $this->form->password
                            ], [
                                "id_user" => $this->form->id_user
                            ]);
                        App::getDB()->pdo->commit();
                    } else {
                        App::getDB()->pdo->rollBack();
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView();
                        exit();
                    }
                } else {
                    //Edycja rekordu o danym ID
                    App::getDB()->pdo->beginTransaction();
                        App::getDB()->update("users", [
                            "name" => $this->form->name,
                            "surname" => $this->form->surname,
                            "phone" => $this->form->phone
                                ], [
                            "id_user" => $this->form->id_user
                        ]);
                        App::getDB()->update("passwords", [
                            "password" => $this->form->password
                        ], [
                            "id_user" => $this->form->id_user
                        ]);
                    App::getDB()->pdo->commit();
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                App::getDB()->pdo->rollBack();
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('personList');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('PersonEdit.tpl');
    }

}
