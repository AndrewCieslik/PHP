<?php

namespace app\transfer;

class User{
	public $login;
	public $role;

	public $id_user;
    public $name;
    public $surname;
    public $phone;
	
	public function __construct($login, $role){
		$this->login = $login;
		$this->role = $role;		
	}	
}