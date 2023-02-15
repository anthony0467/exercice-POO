<?php
class Role
{
	private string $role;
	private array $acteurRole;

	public function __construct(string $role)
	{
		$this->role = $role;
		$this->acteurRole = [];
	}


	public function addActeur($acteur)
	{
		$this->acteurRole[] = $acteur;
	}


	//SET

	public function set_role(string $role)
	{
		$this->role = $role;
	}

	public function set_acteurRole(array $acteurRole)
	{
		$this->acteurRole = $acteurRole;
	}

	//GET

	public function get_role()
	{
		return $this->role;
	}

	public function get_acteurRole()
	{
		return $this->acteurRole;
	}

	public function __toString()
	{
		return $this->get_role();
	}

	// afficher

	public function afficherRoleActeur(){
		
	}
}
