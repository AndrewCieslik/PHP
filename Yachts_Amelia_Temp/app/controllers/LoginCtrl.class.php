<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
    private $id;

    public function __construct() {
        $this->form = new LoginForm();
    }
    public function getId() {
        return $this->id;
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
        //znajdz id_user w bazie dla tego loginu
        $this->form->db_id_user = App::getDB()->get("users", "id_user", [
            "login" => $this->form->login  //if
        ]);

        $this->id = $this->form->db_id_user;
        $_SESSION['id'] = $this->id;

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
        if (!$this->form->db_role) {
            Utils::addErrorMessage('brak roli');
        }
        if ($this->form->db_role == 'admin') {
            RoleUtils::addRole('admin');
        } else if ($this->form->db_role == 'manager') {
            RoleUtils::addRole('manager');
        } else{
            RoleUtils::addRole('user');
        }
        return !App::getMessages()->isError();
    }

    public function action_login() {
        if ($this->validate()) {
            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("home");
        } else {
            $this->generateView();
        }
    }

    public function action_logout() {
        unset($_SESSION['id']);
        session_destroy();
        App::getRouter()->redirectTo('yachtList');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        if (isset($_SESSION['id'])) {
            App::getSmarty()->assign('id', $_SESSION['id']);
        }
        App::getSmarty()->display('LoginView.tpl');
    }
}
