<?php

class Acteur extends identite{
	private string $role;

	public function __construct(string $role){
		$this->role = $role;
	}

	//SET

	public function set_role(string $role){
		$this->role = $role;
	}

	//GET

	public function get_role(){
		return $this-> role;
	}

}
