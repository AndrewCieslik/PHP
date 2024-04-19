<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\RegistrationForm;

class RegistrationCtrl {

    private $form;

    public function __construct() {
        // Inicjalizacja formularza
        $this->form = new RegistrationForm();
    }

    public function validate() {
        // Pobranie parametrów z formularza 
        $this->form->id_user = ParamUtils::getFromRequest('id_user');
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->password2 = ParamUtils::getFromRequest('password2');
        $this->form->phone = ParamUtils::getFromRequest('phone');

        // Walidacja danych
        if (empty($this->form->name) || empty($this->form->surname) || empty($this->form->login) || empty($this->form->password) || empty($this->form->phone)) {
            Utils::addErrorMessage('Wszystkie pola są wymagane');
            return false;
        }
        if ($this->form->password != $this->form->password2) {
            Utils::addErrorMessage('Powtórz poprawnie hasło');
            return false;
        }

        // Sprawdzenie, czy użytkownik o podanym loginie już istnieje (tutaj można dodać logikę sprawdzającą w bazie danych)

        return true;
    }

    public function action_register() {
        if ($this->validate()) {
            // 2. Zapis danych w bazie
            try {
                //2.1 Nowy rekord
                if ($this->form->id_user == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("users");
                    if ($count <= 20000) {
                        App::getDB()->insert("users", [
                            "name" => $this->form->name,
                            "surname" => $this->form->surname,
                            "phone" => $this->form->phone
                        ]);
                        App::getDB()->insert("passwords", [
                            "login" => $this->form->login,
                            "password" => $this->form->password,
                            "id_user" => $this->form->id_user
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("users", [
                        "name" => $this->form->name,
                        "surname" => $this->form->surname,
                        "phone" => $this->form->phone
                            ], [
                        "id_user" => $this->form->id_user
                    ]);
                    App::getDB()->update("passwords", [
                        "login" => $this->form->login,
                        "password" => $this->form->password
                            ], [
                        "id_user" => $this->form->id_user
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            // Rejestracja udana, można przekierować na inną stronę lub wykonać inne akcje
            Utils::addInfoMessage('Rejestracja zakończona sukcesem');
            // Przekierowanie na stronę główną lub gdziekolwiek chcesz
            App::getRouter()->redirectTo('login');
        } else {
            // Wyświetlenie formularza rejestracji ponownie w przypadku nieprawidłowych danych
            $this->generateView();
        }
    }

    public function generateView() {
        // Przekazanie danych formularza do widoku
        App::getSmarty()->assign('form', $this->form);
        // Wyświetlenie widoku
        App::getSmarty()->display('RegistrationView.tpl');
    }
}
