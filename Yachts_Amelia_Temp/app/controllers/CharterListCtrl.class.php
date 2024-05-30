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
        $this->form->id_charter = ParamUtils::getFromRequest('sf_charter');

        return !App::getMessages()->isError();
    }

    public function action_CharterList() {
        $this->validate();
        $search_params = [];
        if (isset($this->form->id_charter) && strlen($this->form->id_charter) > 0) {
            $search_params['id_charter[~]'] = $this->form->id_charter . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
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
            $this->records = App::getDB()->select('charters', [
                '[>]users' => ['id_user' => 'id_user'],
                '[>]yachts' => ['id_yacht' => 'id_yacht']
            ], [
                'charters.id_charter',
                'charters.id_user',
                'charters.id_yacht',
                'yachts.yacht_name',
                'charters.date_start',
                'charters.date_end',
                'charters.approved',
                'users.name',
                'users.surname'
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('charters', $this->records);
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('CharterList.tpl');
    }
}
