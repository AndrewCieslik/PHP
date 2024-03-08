<?php
require_once __DIR__.'/config.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc.php");

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/app/calc.php';