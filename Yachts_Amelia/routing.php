<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('loginShow'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('personList',    'PersonListCtrl', ['admin']);
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('personNew',     'PersonEditCtrl',	['admin']);
Utils::addRoute('personEdit',    'PersonEditCtrl',	['admin']);
Utils::addRoute('personSave',    'PersonEditCtrl',	['admin']);
Utils::addRoute('personDelete',  'PersonEditCtrl',	['admin']);

Utils::addRoute('yachtList',    'YachtListCtrl');
Utils::addRoute('yachtNew',     'YachtEditCtrl',	['admin']);
Utils::addRoute('yachtEdit',    'YachtEditCtrl',	['admin']);
Utils::addRoute('yachtSave',    'YachtEditCtrl',	['admin']);
Utils::addRoute('yachtDelete',  'YachtEditCtrl',	['admin']);

Utils::addRoute('userPanel', 'CharterListCtrl', ['user', 'admin']);
// Utils::addRoute('charterNew_user',     'CharterEditCtrl_user',	['user','admin']);
// Utils::addRoute('charterEdit_user',    'CharterEditCtrl_user',	['user','admin']);
// Utils::addRoute('charterSave_user',    'CharterEditCtrl_user',	['user','admin']);
// Utils::addRoute('charterDelete_user',  'CharterEditCtrl_user',	['user', 'admin']);

Utils::addRoute('controlPanel', 'ControlPanelCtrl', ['admin']);
Utils::addRoute('charterList', 'CharterListCtrl', ['admin']);
Utils::addRoute('charterNew',     'CharterEditCtrl',	['admin']);
Utils::addRoute('charterEdit',    'CharterEditCtrl',	['admin']);
Utils::addRoute('charterSave',    'CharterEditCtrl',	['admin']);
Utils::addRoute('charterDelete',  'CharterEditCtrl',	['admin']);
