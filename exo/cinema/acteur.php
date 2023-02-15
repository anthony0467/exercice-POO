<?php

class Acteur extends Identite
{
	private string $role;

	public function __construct(string $role)
	{
		$this->role = $role;
	}

	//SET

	public function set_role(string $role)
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
