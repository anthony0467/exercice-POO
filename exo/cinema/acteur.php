<?php

class Acteur extends Identite
{

	private array $castings;

	public function __construct($prenom, $nom, $sexe, $dateNaissance)
	{
		parent::__construct($prenom, $nom, $sexe, $dateNaissance);
		$this->castings = [];
	}

	public function addCasting($casting)
	{
		$this->castings[] = $casting;
	}


	//SET



	//GET


	public function __toString()
	{
		return $this->get_role();
	}


	public function afficherFilmographie()
	{
		$resultat = "L'acteur " . $this->prenom . " " . $this->nom . " a joué dans les films suivant: <ul>";
		foreach ($this->castings as $casting) {
			$resultat .= "<li>" . $casting->get_film()->get_titre() . " et a joué le rôle de :" . $casting->get_role() . "</li>";
		}
		return $resultat . '</ul>';
	}
}
