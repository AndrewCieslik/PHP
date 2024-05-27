<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home');
Utils::addRoute('home','Home');

App::getRouter()->setLoginRoute('login');

Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('register',      'RegistrationCtrl');

Utils::addRoute('personList',    'PersonListCtrl', ['user','manager', 'admin']);
Utils::addRoute('personNew',     'PersonEditCtrl', ['user','manager', 'admin']);
Utils::addRoute('personEdit',    'PersonEditCtrl', ['user','manager', 'admin']);
Utils::addRoute('personSave',    'PersonEditCtrl', ['user','manager', 'admin']);
Utils::addRoute('personDelete',  'PersonEditCtrl', ['manager', 'admin']);

Utils::addRoute('yachtList',     'YachtListCtrl');
Utils::addRoute('yachtNew',      'YachtEditCtrl',	['manager', 'admin']);
Utils::addRoute('yachtEdit',     'YachtEditCtrl',	['manager', 'admin']);
Utils::addRoute('yachtSave',     'YachtEditCtrl',	['manager', 'admin']);
Utils::addRoute('yachtDelete',   'YachtEditCtrl',	['manager', 'admin']);

Utils::addRoute('charterList',   'CharterListCtrl', ['user','manager', 'admin']);
Utils::addRoute('charterNew',    'CharterEditCtrl', ['user','manager', 'admin']);
Utils::addRoute('charterEdit',   'CharterEditCtrl', ['user','manager', 'admin']);
Utils::addRoute('charterSave',   'CharterEditCtrl', ['user','manager', 'admin']);
Utils::addRoute('charterDelete', 'CharterEditCtrl', ['user','manager', 'admin']);

Utils::addRoute('roleList',      'RoleListCtrl',    ['admin']);
Utils::addRoute('roleNew',       'RoleEditCtrl',    ['admin']);
Utils::addRoute('roleEdit',      'RoleEditCtrl',	['admin']);
Utils::addRoute('roleSave',      'RoleEditCtrl',	['admin']);
Utils::addRoute('roleDelete',    'RoleEditCtrl',	['admin']);

Utils::addRoute('settings',      'settingsCtrl',    ['admin']);
Utils::addRoute('logList', 'LogCtrl',    ['admin']);
