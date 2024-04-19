<?php
namespace app\controllers;

use core\App;
use core\Utils;
use app\forms\RegistrationForm;

class RegistrationCtrl {

    private $form;

    public function __construct() {
        // Inicjalizacja formularza
        $this->form = new RegistrationForm();
    }

    public function validate() {
        // Pobranie parametrów z formularza
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->phone = ParamUtils::getFromRequest('phone');

        // Walidacja danych
        if (empty($this->form->name) || empty($this->form->surname) || empty($this->form->login) || empty($this->form->password) || empty($this->form->phone)) {
            Utils::addErrorMessage('Wszystkie pola są wymagane');
            return false;
        }

        // Sprawdzenie, czy użytkownik o podanym loginie już istnieje (tutaj można dodać logikę sprawdzającą w bazie danych)

        return true;
    }

    public function action_register() {
        if ($this->validate()) {
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
