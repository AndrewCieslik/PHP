<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\CharterSearchForm;

class CharterListCtrl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CharterSearchForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->id_charter = ParamUtils::getFromRequest('sf_charter');

        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

        return !App::getMessages()->isError();
    }

    public function action_CharterList() {
        $this->validate();
        $search_params = [];
        if (isset($this->form->id_charter) && strlen($this->form->id_charter) > 0) {
            $search_params['id_charter[~]'] = $this->form->id_charter . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
        if (isset($this->form->id_yacht) && strlen($this->form->id_yacht) > 0) {
            $search_params['id_yacht[~]'] = $this->form->id_yacht . '%';
        }
        if (isset($this->form->id_user) && strlen($this->form->id_user) > 0) {
            $search_params['id_user[~]'] = $this->form->id_user . '%';
        }
        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej
        $where ["ORDER"] = "id_charter";
        //wykonanie zapytania
        try {
//            $this->records = App::getDB()->select("charters", [
//                "id_charter",
//                "id_user",
//                "id_yacht",
//                "date_start",
//                "date_end",
//                "approved",
//                    ], $where);

//            $this->records = App::getDB()->select("charters", [
//                "[>]users" => ['id_user' => 'id_user']
//            ], [
//                "charters.id_charter",
//                "charters.id_user",
//                "charters.id_yacht",
//                "charters.date_start",
//                "charters.date_end",
//                "charters.approved",
//                "users.name",
//                "users.surname",
//                "users.phone"
//
//            ],
//                [
//                    "id_charter"=>$this->form->id_charter
//                ]);
            $this->records = App::getDB()->select("charters", [
                'INNER JOIN' => "users",
                'ON' => '[charters].id_user like [users].id_user'
            ], [
                '[charters].id_charter',
                '[charters].id_user',
                '[charters].id_yacht',
                '[charters].date_start',
                '[charters].date_end',
                '[charters].approved',
                '[users].name',
                '[users].surname',
                '[users].phone'
            ]);
        } catch (\PDOException $e) {
            // W przypadku błędu transakcji, cofnięcie zmian

            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('charters', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('CharterList.tpl');
    }

}
