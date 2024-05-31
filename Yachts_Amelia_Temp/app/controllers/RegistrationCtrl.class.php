<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\RegistrationForm;
use Exception;

class RegistrationCtrl {
    private $form;
    public function __construct() {
        $this->form = new RegistrationForm();
    }

    public function validateSave() {
        $this->form->id_user = ParamUtils::getFromRequest('id_user');
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->password2 = ParamUtils::getFromRequest('password2');
        $this->form->phone = ParamUtils::getFromRequest('phone');

        // Walidacja danych
        if (empty($this->form->name) || empty($this->form->surname) || empty($this->form->login) || empty($this->form->password)  || empty($this->form->password2) || empty($this->form->phone)) {
            Utils::addErrorMessage('Wszystkie pola są wymagane');
            return false;
        }
        if ($this->form->password != $this->form->password2) {
            Utils::addErrorMessage('Powtórz poprawnie hasło');
            return false;
        }
        if (strlen($this->form->password) <= 6) {
            Utils::addErrorMessage('Za mała liczba znaków hasła. Minimum 6');
        }

        return !App::getMessages()->isError();
    }
    /**
     * @throws Exception
     */
    public function action_register() {
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {
                App::getDB()->insert("users", [
                    "login" => $this->form->login,
                    "name" => $this->form->name,
                    "surname" => $this->form->surname,
                    "phone" => $this->form->phone
                ]);

                $lastUserId = App::getDB()->id();

                App::getDB()->insert("passwords", [
                    "id_user" => $lastUserId, //Ostatnie użyte id_users
                    "password" => $this->form->password
                ]);

                // Sprawdzenie, czy rola "user" istnieje w tabeli 'roles' i pobranie jej `id_role`
                $role = App::getDB()->get("roles", "id_role", [
                    "role" => "user"
                ]);

                if (!$role) {
                    throw new Exception("Role 'user' does not exist in the roles table.");
                }
                // Domyślnie przypisana rola "user"
                App::getDB()->insert("assigned_roles", [
                    "id_user" => $lastUserId,
                    "id_role" => $role
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('login');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('RegistrationView.tpl');
    }

    public function id() {
        return App::getDB()->lastInsertId();
    }
}