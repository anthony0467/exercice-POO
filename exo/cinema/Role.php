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


	public function addCasting($casting)
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

	public function afficherActeurFilm()
	{
		$resultat = 'Le role de : ' . $this . ' a été incarné par <ul>';
		foreach ($this->castings as $casting) {

			$resultat .= '<li>' . $casting->get_acteur()->get_prenom() . ' ' . $casting->get_acteur()->get_nom() . ' dans le film ' . $casting->get_film()->get_titre() .  '</li>';
		}
		return $resultat . '</ul>';
	}
}
