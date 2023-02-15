<?php
class film
{
	private string $titre;
	private string $date;
	private int $duree;
	private Realisateur $realisateur;
	private string $synopsys;
	private string $genre;


	public function __construct(string $titre, string $date, int $duree, Realisateur $realisateur, string $synopsys, string $genre)
	{
		$this->titre = $titre;
		$this->date = $date;
		$this->duree = $duree;
		$this->realisateur = $realisateur;
		$this->synopsys = $synopsys;
		$this->genre = $genre;
	}

	//SET
	public function set_titre(string $titre)
	{
		$this->titre = $titre;
	}

	public function set_date(string $date)
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

	public function set_genre(string $genre)
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
}
