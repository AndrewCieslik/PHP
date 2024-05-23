<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    // Obiekt przechowujący dane formularza logowania
    private $form;

    public function __construct() {
        // Inicjalizacja formularza logowania
        $this->form = new LoginForm();
    }

    // Metoda walidująca dane logowania
    public function validate() {
        // Pobranie loginu i hasła z żądania
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->db_login = App::getDB()->get("users", ["id_user", "login"], [
            "login" => $this->form->login
        ]);
        if (!$this->form->db_login) {
            Utils::addErrorMessage('Użytkownik o podanym loginie nie jest zarejestrowany');
            return false;
        }

        // Sprawdzenie, czy login i hasło zostały podane
        if (empty($this->form->login) || empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano loginu lub hasła');
            return false;
        }

        try {
            // Wyszukiwanie użytkownika na podstawie loginu w tabeli `passwords`
            $this->form->records = App::getDB()->select("passwords", [
                "[>]users" => ["id_user" => "id_user"]
            ], [
                "users.id_user",
                "users.name",
                "users.surname",
                "users.phone",
                "passwords.password"
            ], [
                "passwords.login" => $this->form->login
            ]);
        } catch (\PDOException $e) {
            // Obsługa błędów podczas wyszukiwania w bazie danych
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
            return false;
        }

        // Sprawdzenie, czy użytkownik istnieje i czy hasło się zgadza
        $user_exists = !empty($this->form->users);
        if ($user_exists) {   // && password_verify($this->form->password, $this->form->records[0]["password"]
            // Przypisanie danych użytkownika do sesji
            //$_SESSION['user'] = $this->form->records[0];
            return true;
        } else {
            // Dodanie komunikatu o błędzie, jeśli login lub hasło są niepoprawne
            Utils::addErrorMessage('Niepoprawny login lub hasło');
            return false;
        }
    }

    // Akcja wyświetlająca stronę logowania
    public function action_loginShow() {
        $this->generateView();
    }

    // Akcja obsługująca logowanie
    public function action_login() {
        if ($this->validate()) {
            // Dodanie komunikatu o poprawnym logowaniu
            Utils::addInfoMessage('Poprawnie zalogowano do systemu ' . $_SESSION['user']["name"] . " " . $_SESSION['user']["surname"]);
            // Przekierowanie na stronę główną
            App::getRouter()->redirectTo("home");
        } else {
            // Ponowne wyświetlenie strony logowania w przypadku błędów
            $this->generateView();
        }
    }

    // Akcja obsługująca wylogowanie
    public function action_logout() {
        // Usunięcie danych użytkownika z sesji
        unset($_SESSION['user']);
        session_destroy();
        // Przekierowanie na stronę główną
        App::getRouter()->redirectTo('home');
    }

    // Generowanie widoku strony logowania
    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
    }
}
