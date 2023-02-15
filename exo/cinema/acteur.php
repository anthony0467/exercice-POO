<?php

class Acteur extends Identite
{
	private Role $role;
	private array $filmographies;

	public function __construct($prenom, $nom, $sexe, $dateNaissance, Role $role)
	{
		parent::__construct($prenom, $nom, $sexe, $dateNaissance);
		$this->role = $role;
		$this->role->addActeur($this);
		$this->filmographies = [];
	}

	public function addFilm($film)
	{
		$this->filmographies[] = $film;
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


	public function afficherFilmographie()
	{
		$resultat = 'L\'acteur ' . $this->prenom . ' ' . $this->nom . ' a joué dans les films suivant: <ul>';
		foreach ($this->filmographies as $film) {
			$resultat .= '<li>' . $film->get_titre() . '</li>';
		}
		return $resultat . '</ul>';
	}
}
