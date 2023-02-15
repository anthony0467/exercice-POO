<?php
class Role
{
	private string $role;
	private array $castings;

	public function __construct(string $role)
	{
		$this->role = $role;
		$this->castings = [];
	}


	public function addActeur($casting)
	{
		$this->castings[] = $casting;
	}


	//SET

	public function set_role(string $role)
	{
		$this->role = $role;
	}

	/*public function set_acteurRole(array $acteurRole)
	{
		$this->acteurRole = $acteurRole;
	}*/

	//GET

	public function get_role()
	{
		return $this->role;
	}

	/*public function get_acteurRole()
	{
		return $this->acteurRole;
	}*/

	public function __toString()
	{
		return $this->get_role();
	}

	// afficher

	/*public function afficherRoleActeur()
	{
		$resultat = 'Le role de : ' . $this . ' a été incarné par <ul>';
		foreach ($this->acteurRole as $role) {

			$resultat .= '<li>' . $role->get_prenom() . ' ' . $role->get_nom() . '</li>';
		}
		return $resultat . '</ul>';
	}*/
}
