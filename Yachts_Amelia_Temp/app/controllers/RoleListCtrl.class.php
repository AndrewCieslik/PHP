<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\roleSearchForm;

class RoleListCtrl {

    private $form;
    private $records;

    public function __construct() {
        $this->form = new RoleSearchForm();
    }

    public function validate() {
        $this->form->role = ParamUtils::getFromRequest('sf_role');
        return !App::getMessages()->isError();
    }

    public function action_roleList() {
        $this->validate();
        $search_params = [];
        if (isset($this->form->role) && strlen($this->form->role) > 0) {
            $search_params['role[~]'] = $this->form->role . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["ORDER"] = "role";
        try {
            $this->records = App::getDB()->select("roles", [
                "id_role",
                "role",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('people', $this->records);
        App::getSmarty()->assign('_SESSION', $_SESSION);
        App::getSmarty()->display('roleList.tpl');
    }
}
