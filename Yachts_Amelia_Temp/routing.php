<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home');
Utils::addRoute('home',    'Home');

App::getRouter()->setLoginRoute('login');

Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');

Utils::addRoute('personList',    'PersonListCtrl');
Utils::addRoute('personNew',     'PersonEditCtrl',	['manager', 'admin']);
Utils::addRoute('personEdit',    'PersonEditCtrl',	['manager', 'admin']);
Utils::addRoute('personSave',    'PersonEditCtrl',	['manager', 'admin']);
Utils::addRoute('personDelete',  'PersonEditCtrl',	['manager', 'admin']);

Utils::addRoute('yachtList',    'YachtListCtrl');
Utils::addRoute('yachtNew',     'YachtEditCtrl',	['manager', 'admin']);
Utils::addRoute('yachtEdit',    'YachtEditCtrl',	['manager', 'admin']);
Utils::addRoute('yachtSave',    'YachtEditCtrl',	['manager', 'admin']);
Utils::addRoute('yachtDelete',  'YachtEditCtrl',	['manager', 'admin']);

Utils::addRoute('charterList', 'CharterListCtrl');
Utils::addRoute('charterNew',     'CharterEditCtrl',	['manager', 'admin']);
Utils::addRoute('charterEdit',    'CharterEditCtrl',	['manager', 'admin']);
Utils::addRoute('charterSave',    'CharterEditCtrl',	['manager', 'admin']);
Utils::addRoute('charterDelete',  'CharterEditCtrl',	['manager', 'admin']);

Utils::addRoute('register', 'RegistrationCtrl');

Utils::addRoute('roleList',    'RoleListCtrl',          ['admin']);
Utils::addRoute('roleNew',     'RoleEditCtrl',	        ['admin']);
Utils::addRoute('roleEdit',    'RoleEditCtrl',	        ['admin']);
Utils::addRoute('roleSave',    'RoleEditCtrl',	        ['admin']);
Utils::addRoute('roleDelete',  'RoleEditCtrl',	        ['admin']);