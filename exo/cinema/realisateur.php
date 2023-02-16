<?php
class Realisateur extends Identite
{

	private array $films;

	public function __construct($prenom, $nom, $sexe, $dateNaissance)
	{
		parent::__construct($prenom, $nom, $sexe, $dateNaissance);
		$this->films = [];
	}

	public function addFilm($film)
	{
		$this->films[] = $film;
	}

	public function afficherFilmParReal()
	{
		$resultat = 'Liste des films réalisé par: ' . $this->get_nom() . ' ' . $this->get_prenom() . ': <ul>';
		foreach ($this->films as $film) {
			$resultat .= '<li>' . $film->get_titre() . '</li>';
		}
		return $resultat . '</ul>';
	}
}
