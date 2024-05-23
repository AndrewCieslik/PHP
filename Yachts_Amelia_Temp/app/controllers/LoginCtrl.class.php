<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        //1. mam login i hasło z formularza
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        if (!isset($this->form->login)){
            return false;
        }
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (App::getMessages()->isError()){
            return false;
        }
        //4. sprawdz nazwe roli dla tego id_role i dodaj addRole

        //2. znajdz id_user w bazie dla tego loginu
        $this->form->db_id_user = App::getDB()->get("users", "id_user", [
            "login" => $this->form->login  //if
        ]);

        //3. znajdz i porownaj hasło z bazy z hasłem z formularza
        if (!$this->form->db_id_user) {
            Utils::addErrorMessage('Użytkownik o podanym loginie nie istnieje');
        }
        $this->form->db_password = App::getDB()->get("passwords", "password", [
            "id_user" => $this->form->db_id_user
        ]);
        if (!$this->form->db_password) {
            Utils::addErrorMessage('Brak hasła użytkownika w bazie');
        }
        //4. jeśli hasło z formularza jest takie samo, jak w tablicy passwords
        if ($this->form->pass == $this->form->db_password) {
            Utils::addErrorMessage('Prawidłowe hasło');
        } else {
            Utils::addErrorMessage('Nieprawidłowe hasło');
            return false;
        }
        //5. to jakie id_role ma przypisany użytkownik (wg id_user) w tablicy assigned_roles
        $this->form->db_id_role = App::getDB()->get("assigned_roles", "id_role", [
            "id_user" => $this->form->db_id_user
        ]);
        //6. sprawdź nazwę roli dla takiego id_role w tablicy roles
        $this->form->db_role = App::getDB()->get("roles", "role", [
            "id_role" => $this->form->db_id_role
        ]);
        //7. przypisz tą nazwę roli użytkownikowi
        if (!$this->form->db_role) {
            RoleUtils::addRole('user');
        }
        if($this->form->db_role == "user"){
            RoleUtils::addRole($this->form->db_role);
            Utils::addErrorMessage('Witaj użytkowniku');
        }
//        if (!$this->form->db_login) {
//            Utils::addErrorMessage('Użytkownik o podanym loginie nie jest zarejestrowany');
//            return false;
//        }
//        if (!$this->form->db_password) {
//            Utils::addErrorMessage('Nieprawidłowe hasło');
//            return false;
//        }

        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            RoleUtils::addRole('admin');
            Utils::addErrorMessage('Witaj adminie');
        }
//        } else if ($this->form->login == "user" && $this->form->pass == "user") {
//           // RoleUtils::addRole('user');
//        } else {
//            Utils::addErrorMessage('Niepoprawny login lub hasło');
//        }
        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("personList");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('personList');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
