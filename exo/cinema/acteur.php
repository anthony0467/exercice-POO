<?php

class Acteur extends Identite
{
	private Role $role;

	public function __construct($prenom, $nom, $sexe, $dateNaissance, Role $role)
	{
		parent::__construct($prenom, $nom, $sexe, $dateNaissance);
		$this->role = $role;
		$this->role->addActeur($this);
	}

	//SET

	public function set_role(Role $role)
	{
		$this->role = $role;
	}

	//GET

	public function get_role()
	{
		return $this->role;
	}

	public function __toString()
	{
		return $this->get_role();
	}
}
