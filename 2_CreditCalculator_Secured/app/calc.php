<?php
require_once __DIR__ . '/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$credit,&$percent,&$years){
	$credit = isset($_REQUEST['credit']) ? $_REQUEST['credit'] : null;
	$percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$credit,&$percent,&$years,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($credit) && isset($percent) && isset($years))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $credit == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $percent == "") {
		$messages [] = 'Nie podano oprocentowania';
	}
	if ( $years == "") {
		$messages [] = 'Nie podano liczby lat';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $credit )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $percent )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric( $years )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$credit,&$percent,&$years,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$credit = (float) $credit;
    $percent = (float) $percent;
    $years = (int) $years;
	
	//wykonanie operacji
	$monthly = ($credit + ($percent * $credit / 100)) / ($years * 12);
    $result = number_format($monthly, 2, '.', '');
}

//definicja zmiennych kontrolera
$credit = null;
$percent = null;
$years = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($credit,$percent,$years);
if ( validate($credit,$percent,$years,$messages) ) { // gdy brak błędów
	process($credit,$percent,$years,$messages,$result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';