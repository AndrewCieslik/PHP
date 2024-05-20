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

        // Sprawdzenie, czy login został podany
        if (!isset($this->form->login))
            return false;
        // Sprawdzenie, czy login nie jest pusty
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        // Sprawdzenie, czy hasło nie jest puste
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        // Jeśli są jakieś błędy, zakończ walidację
        if (App::getMessages()->isError())
            return false;

        // Przygotowanie parametrów do wyszukiwania użytkownika w bazie danych
        $search_params = [];
        $search_params['username'] = $this->form->login;
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        try {
            // Wyszukiwanie użytkownika w bazie danych
            $this->form->records = App::getDB()->select("users", [
                "username",
                "name",
                "surname",
                "password",
                "user_id"
            ], $where);
        } catch (\PDOException $e) {
            // Obsługa błędów podczas wyszukiwania w bazie danych
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // Sprawdzenie, czy użytkownik istnieje i czy hasło się zgadza
        $user_exists = !empty($this->form->records);
        if ($user_exists && $this->form->login == $this->form->records[0]["username"] && $this->form->pass == $this->form->records[0]["password"]) {

            // Przygotowanie parametrów do wyszukiwania ról użytkownika
            $search_params = [];
            $search_params['users_user_id'] = $this->form->records[0]["user_id"];
            $num_params = sizeof($search_params);
            if ($num_params > 1) {
                $where = ["AND" => &$search_params];
            } else {
                $where = &$search_params;
            }
            try {
                // Wyszukiwanie ról przypisanych do użytkownika
                $roles_associated_table = App::getDB()->select("users_roles", [
                    "roles_role_id"
                ], $where);
            } catch (\PDOException $e) {
                // Obsługa błędów podczas wyszukiwania w bazie danych
                Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // Inicjalizacja zmiennej sesji dla roli admina
            $_SESSION['admin'] = NULL;
            foreach ($roles_associated_table as $rat) {

                // Przygotowanie parametrów do wyszukiwania typu roli
                $search_params = [];
                $search_params['role_id'] = $rat["roles_role_id"];
                $num_params = sizeof($search_params);
                if ($num_params > 1) {
                    $where = ["AND" => &$search_params];
                } else {
                    $where = &$search_params;
                }

                try {
                    // Wyszukiwanie typu roli w bazie danych
                    $roles_table = App::getDB()->select("roles", [
                        "role_id",
                        "type"
                    ], $where);

                    // Dodawanie roli do użytkownika
                    RoleUtils::addRole($roles_table[0]["type"]);
                    // Sprawdzenie, czy użytkownik ma rolę admina
                    if ($_SESSION['admin'] == true || $roles_table[0]["type"] == "admin") {
                        $_SESSION['admin'] = true;
                    } else {
                        $_SESSION['admin'] = false;
                    }

                } catch (\PDOException $e) {
                    // Obsługa błędów podczas wyszukiwania w bazie danych
                    Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
                    if (App::getConf()->debug)
                        Utils::addErrorMessage($e->getMessage());
                }
            }

        } else {
            // Dodanie komunikatu o błędzie, jeśli login lub hasło są niepoprawne
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }
        return !App::getMessages()->isError();
    }

    // Akcja wyświetlająca stronę logowania
    public function action_loginShow() {
        $this->generateView();
    }

    // Akcja obsługująca logowanie
    public function action_login() {
        if ($this->validate()) {
            // Dodanie komunikatu o poprawnym logowaniu
            Utils::addInfoMessage('Poprawnie zalogowano do systemu '. $this->form->records[0]["name"] . " ".
                                                                      $this->form->records[0]["surname"]);
            // Przekazanie danych formularza do widoku i przekierowanie na stronę główną
            App::getSmarty()->assign('form', $this->form); 
            App::getRouter()->redirectTo("homePage");
        } else {
            // Ponowne wyświetlenie strony logowania w przypadku błędów
            $this->generateView();
        }
    }

    // Akcja obsługująca wylogowanie
    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('homePage');
    }

    // Generowanie widoku strony logowania
    public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('LoginView.tpl');
    }

}
