<?php
class Casting
{
	private Acteur $acteur;
	private Role $role;
	private Film $film;

	public function __construct(Acteur $acteur, Role $role, Film $film)
	{
		$this->acteur = $acteur;
		$this->role = $role;
		$this->film = $film;
	}

	//SET
	public function set_acteur(Acteur $acteur)
	{
		$this->acteur = $acteur;
	}

	public function set_role(Role $role)
	{
		$this->role = $role;
	}

	public function set_film(Film $film)
	{
		$this->film = $film;
	}

	//GET

	public function get_acteur()
	{
		return $this->acteur;
	}

	public function get_role()
	{
		return $this->role;
	}

	public function get_film()
	{
		return $this->film;
	}

	public function __toString()
	{
		return $this->get_acteur() . ' ' . $this->get_role() . ' ' . $this->get_film();
	}

	public function afficherCasting()
	{
		$resultat = 'Casting du film ' . $this->get_film()->get_title() . '<br>';
		return $resultat;
	}
}
