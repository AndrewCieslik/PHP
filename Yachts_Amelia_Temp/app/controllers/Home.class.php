<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\YachtSearchForm;

class Home {
    private $form;
    private $records;

    public function __construct() {
        $this->form = new YachtSearchForm();
    }

    public function validate() {
        $this->form->model = ParamUtils::getFromRequest('sf_model');
        return !App::getMessages()->isError();
    }

    public function action_home() {
        $this->validate();
        $search_params = [];
        if (isset($this->form->model) && strlen($this->form->model) > 0) {
            $search_params['model[~]'] = $this->form->model . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        $where ["ORDER"] = "model";
        try {
            $this->records = App::getDB()->select("yachts", [
                "id_yacht",
                "model",
                "yacht_name",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('people', $this->records);
        App::getSmarty()->display('Home.tpl');
    }
}
