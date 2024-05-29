<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\YachtSearchForm;

class YachtListCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new YachtSearchForm();
    }

    public function validate() {
        $this->form->model = ParamUtils::getFromRequest('sf_model');
        return !App::getMessages()->isError();
    }

    public function action_yachtList() {
        $this->validate();

        $search_params = [];
        if (isset($this->form->model) && strlen($this->form->model) > 0) {
            $search_params['model[~]'] = $this->form->model . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["ORDER"] = "model";
        try {
            $this->records = App::getDB()->select("yachts", [
                "id_yacht",
                "model",
                "yacht_name",
                "image",
            ], $where);

            foreach ($this->records as &$record) {
                if (!empty($record['image'])) {
                    $record['image'] = 'data:image/jpeg;base64,' . base64_encode($record['image']);
                }
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('yachts', $this->records);
        App::getSmarty()->display('YachtList.tpl');
    }

}
