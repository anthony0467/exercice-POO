<?php

class Genre
{
	private string $genre;
	private array $films;

	public function __construct(string $genre)
	{
		$this->genre = $genre;
		$this->films = [];
	}

	public function addFilm($film)
	{
		$this->films[] = $film;
	}


	//SET
	public function set_genre(string $genre)
	{
		$this->genre = $genre;
	}
	//GET
	public function get_genre()
	{
		return $this->genre;
	}
	//string

	public function __toString()
	{
		return $this->get_genre();
	}

	// AFFICHER

	public function afficherFilmParGenre()
	{
		$resultat = 'Liste des films classé par genre: ' . $this . '. Nombres de films trouvé: ' . count($this->films) . '<ul>';
		foreach ($this->films as $film) {
			$resultat .= '<li>' . $film->get_titre() . '</li>';
		}
		return $resultat . '</ul>';
	}
}
