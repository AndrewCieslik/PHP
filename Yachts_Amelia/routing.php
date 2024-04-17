<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('loginShow'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

//Utils::addRoute('personList',    'PersonListCtrl');
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('personNew',     'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personEdit',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personSave',    'PersonEditCtrl',	['user','admin']);
Utils::addRoute('personDelete',  'PersonEditCtrl',	['admin']);

Utils::addRoute('yachtList',    'YachtListCtrl');
Utils::addRoute('yachtNew',     'YachtEditCtrl',	['user','admin']);
Utils::addRoute('yachtEdit',    'YachtEditCtrl',	['user','admin']);
Utils::addRoute('yachtSave',    'YachtEditCtrl',	['user','admin']);
Utils::addRoute('yachtDelete',  'YachtEditCtrl',	['admin']);

Utils::addRoute('charterList_user', 'CharterListCtrl_user', ['user']);
