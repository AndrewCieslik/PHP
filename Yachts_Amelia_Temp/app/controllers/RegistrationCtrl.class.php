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

    public function validateSave() {
        // Pobranie parametrów z formularza 
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->password2 = ParamUtils::getFromRequest('password2');
        $this->form->phone = ParamUtils::getFromRequest('phone');

        // Walidacja danych
        if (empty($this->form->name) || empty($this->form->surname) || empty($this->form->login) || empty($this->form->password) || empty($this->form->password2) || empty($this->form->phone)) {
            Utils::addErrorMessage('Wszystkie pola są wymagane');
            return false;
        }
        if ($this->form->password != $this->form->password2) {
            Utils::addErrorMessage('Powtórz poprawnie hasło');
            return false;
        }

        // Sprawdzenie, czy użytkownik o podanym loginie już istnieje (tutaj można dodać logikę sprawdzającą w bazie danych)

        return !App::getMessages()->isError();
    }

    public function action_register() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {
                // Rozpoczęcie transakcji
                App::getDB()->beginTransaction();

                // Wstawienie danych użytkownika do tabeli 'users'
                $id_user = App::getDB()->insert("users", [
                    "name" => $this->form->name,
                    "surname" => $this->form->surname,
                    "phone" => $this->form->phone
                ]);

                // Wstawienie danych hasła do tabeli 'passwords'
                // App::getDB()->insert("passwords", [              //TODO: NIE DZIALA WPISANIE DO passwords
                //     "id_user" => $id_user,
                //     "password" => $this->form->password
                // ]);

                // Zatwierdzenie transakcji
                App::getDB()->commit();

            } catch (\PDOException $e) {
                // W przypadku błędu transakcji, cofnięcie zmian
                App::getDB()->rollBack();
                
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // Przekierowanie na inną stronę po zapisaniu danych
            App::getRouter()->forwardTo('login');
        } else {
            // Pozostanie na stronie w przypadku błędów walidacji
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
