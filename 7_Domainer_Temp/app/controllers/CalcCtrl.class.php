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

	private $msgs;   
	private $form;   
	private $result; 

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function getParams(){
		$this->form->credit = isset($_REQUEST ['credit']) ? $_REQUEST ['credit'] : null;
		$this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST ['percent'] : null;
		$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
	}

	public function validate() {
		if (!(isset($this->form->credit) && isset($this->form->percent) && isset($this->form->years))) {
			return false; 
		}
		if ($this->form->credit == "") {
			$this->msgs->addError('Number 1 not provided');
		}
		if ($this->form->percent == "") {
			$this->msgs->addError('Number 2 not provided');
		}
		if ($this->form->years == "") {
			$this->msgs->addError('Number 3 not provided');
		}
		
		if (!$this->msgs->isError()) {
			
			if (!is_numeric($this->form->credit)) {
				$this->msgs->addError('First value is not a whole number');
			}
			
			if (!is_numeric($this->form->percent)) {
				$this->msgs->addError('Second value is not a whole number');
			}
	
			if (!is_numeric($this->form->years)) {
				$this->msgs->addError('Third value is not a whole number');
			}
		}
		return !$this->msgs->isError();
	}	
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
		
			$this->form->credit = (float)($this->form->credit);
			$this->form->percent = (float)($this->form->percent);
			$this->form->years = (int)($this->form->years);
			$this->msgs->addInfo('Correct parameters.');
				
			$this->result->result = ($this->form->credit + ($this->form->percent * $this->form->credit / 100)) / ($this->form->years * 12);
    		$this->result->result = number_format($this->result->result, 2, '.', '');
			
			$this->msgs->addInfo('Correct.');
		}
		global $role;
	
		$this->generateView();
	}
	
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
		
		$smarty->display($conf->root_path.'/app/views/CalcView.tpl');
	}
}
