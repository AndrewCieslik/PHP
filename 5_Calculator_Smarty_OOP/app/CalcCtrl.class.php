<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->credit = isset($_REQUEST ['credit']) ? $_REQUEST ['credit'] : null;
		$this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST ['percent'] : null;
		$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->credit ) && isset ( $this->form->percent ) && isset ( $this->form->years ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->credit == "") {
			$this->msgs->addError('Nie podano liczby 1');
		}
		if ($this->form->percent == "") {
			$this->msgs->addError('Nie podano liczby 2');
		}
		if ($this->form->years == "") {
			$this->msgs->addError('Nie podano liczby 3');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->credit )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->percent )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->years )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->credit = intval($this->form->credit);
			$this->form->percent = intval($this->form->percent);
			$this->form->years = intval($this->form->years);
			$this->msgs->addInfo('Parametry poprawne.');
				
			// //wykonanie operacji
			// switch ($this->form->op) {
			// 	case 'minus' :
			// 		$this->result->result = $this->form->x - $this->form->y;
			// 		$this->result->op_name = '-';
			// 		break;
			// 	case 'times' :
			// 		$this->result->result = $this->form->x * $this->form->y;
			// 		$this->result->op_name = '*';
			// 		break;
			// 	case 'div' :
			// 		$this->result->result = $this->form->x / $this->form->y;
			// 		$this->result->op_name = '/';
			// 		break;
			// 	default :
			// 		$this->result->result = $this->form->x + $this->form->y;
			// 		$this->result->op_name = '+';
			// 		break;
			// }
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Calculator example');
		$smarty->assign('page_description','MVC/OOP');
		$smarty->assign('page_header','Objects in PHP');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
