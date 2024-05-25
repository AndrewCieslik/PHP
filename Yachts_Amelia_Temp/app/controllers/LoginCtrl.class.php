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
        $this->form = new LoginForm();
    }

    public function validate() {
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
        if ($this->form->login == "manager" && $this->form->pass == "manager") {
            RoleUtils::addRole('manager');
            Utils::addErrorMessage('Witaj managerze');
            return true;
        }
        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            RoleUtils::addRole('admin');
            Utils::addErrorMessage('Witaj adminie');
            return true;
        }

        //znajdz id_user w bazie dla tego loginu
        $this->form->db_id_user = App::getDB()->get("users", "id_user", [
            "login" => $this->form->login  //if
        ]);

        //znajdz i porownaj hasło z bazy z hasłem z formularza
        if (!$this->form->db_id_user) {
            Utils::addErrorMessage('Użytkownik o podanym loginie nie istnieje');
        }
        $this->form->db_password = App::getDB()->get("passwords", "password", [
            "id_user" => $this->form->db_id_user
        ]);
        if (!$this->form->db_password) {
            Utils::addErrorMessage('Nieprawidłowe hasło. Skontaktuj sie z administratorem');
        }
        if ($this->form->pass != $this->form->db_password) {
            Utils::addErrorMessage('Nieprawidłowe hasło');
            return false;
        }
        //jeśli hasło z formularza jest takie samo, jak w tablicy passwords
        //to jakie id_role ma przypisany użytkownik (wg id_user) w tablicy assigned_roles

        $this->form->db_id_role = App::getDB()->get("assigned_roles", "id_role", [
            "id_user" => $this->form->db_id_user
        ]);
        //sprawdź nazwę roli dla takiego id_role w tablicy roles
        $this->form->db_role = App::getDB()->get("roles", "role", [
            "id_role" => $this->form->db_id_role
        ]);
        if ($this->form->db_role == 'admin') {
            RoleUtils::addRole('admin');
        } else {
            RoleUtils::addRole('user');
        }
        return !App::getMessages()->isError();
    }

//    public function action_login() {
//        $this->generateView();
//    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("home");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('yachtList');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }
}
