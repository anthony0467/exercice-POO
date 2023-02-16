<?php
class film
{
	private string $titre;
	private int $date;
	private int $duree;
	private Realisateur $realisateur;
	private string $synopsys;
	private Genre $genre;
	private array $castings;



	public function __construct(string $titre, int $date, int $duree, Realisateur $realisateur, string $synopsys, Genre $genre)
	{
		$this->titre = $titre;
		$this->date = $date;
		$this->duree = $duree;
		$this->realisateur = $realisateur;
		$this->synopsys = $synopsys;
		$this->genre = $genre;
		$this->genre->addFilm($this);
		$this->realisateur->addFilm($this);
		$this->castings = [];
	}

	public function addCasting($casting)
	{
		$this->castings[] = $casting;
	}

	//SET
	public function set_titre(string $titre)
	{
		$this->titre = $titre;
	}

	public function set_date(int $date)
	{
		$this->date = $date;
	}

	public function set_duree(int $duree)
	{
		$this->duree = $duree;
	}

	public function set_realisateur(Realisateur $realisateur)
	{
		$this->realisateur = $realisateur;
	}

	public function set_synopsys(string $synopsys)
	{
		$this->synopsys = $synopsys;
	}

	public function set_genre(Genre $genre)
	{
		$this->genre = $genre;
	}

	//GET

	public function get_titre()
	{
		return $this->titre;
	}

	public function get_date()
	{
		return $this->date;
	}

	public function get_duree()
	{
		return $this->duree;
	}

	public function get_realisateur()
	{
		return $this->realisateur;
	}

	public function get_synopsys()
	{
		return $this->synopsys;
	}
	public function get_genre()
	{
		return $this->genre;
	}

	public function __toString()
	{
		return $this->get_titre() . "<br> Date de sortie: " . $this->get_date() . "<br>Durée: " . $this->get_duree() . "minutes <br>";
	}

	public function afficherInfoFilm()
	{
		echo $this . " " . $this->realisateur->get_prenom() . " " . $this->realisateur->get_nom() . "<br> Sexe: " . $this->realisateur->get_sexe() . "<br> Date de naissance: " . $this->realisateur->get_dateNaissance() . "<br> Synopsis: " . $this->get_synopsys() . "<br> Genre:" . $this->get_genre();
	}

	public function afficherRoleActeur()
	{
		$resultat = "Le film: " . $this->get_titre() . " à pour casting:  <ul>";
		foreach ($this->castings as $casting) {
			$resultat .= "<li>" . $casting->get_acteur()->get_prenom() . " " . $casting->get_acteur()->get_nom() . " dans le role de " . $casting->get_role() . "</li>";
		}
		return $resultat . '</ul>';
	}
}
