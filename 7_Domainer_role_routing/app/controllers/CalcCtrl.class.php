<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->credit = getFromRequest('credit');
        $this->form->percent = getFromRequest('percent');
        $this->form->years = getFromRequest('years');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		if (!isset($this->form->credit) || !isset($this->form->percent) || !isset($this->form->years)) {
            $this->msgs->addError('Nie podano wszystkich danych'); 
            return false;
        }
        
        if ($this->form->credit == "" || $this->form->percent == "" || $this->form->years == "") {
            $this->msgs->addError('Nie podano wszystkich danych'); 
            return false;
        }
        
        if (!is_numeric($this->form->credit) || !is_numeric($this->form->percent) || !is_numeric($this->form->years)) {
            $this->msgs->addError('Wprowadzone dane nie są liczbami');
            return false;
        }
        return true;
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->credit = (float)$this->form->credit;
            $this->form->percent = (float)$this->form->percent;
            $this->form->years = (int)$this->form->years;
			getMessages()->addInfo('Parametry poprawne.');
            
            $this->result->result = ($this->form->credit + ($this->form->percent * $this->form->credit / 100)) / ($this->form->years * 12);
            $this->result->result = number_format($this->result->result, 2, '.', '');
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		//getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
