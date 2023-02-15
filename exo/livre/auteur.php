<?php

class Auteur
{
	private string $lastName;
	private string $firstName;
	private array $allBook;

	public function __construct(string $lastName, string $firstName)
	{
		$this->lastName = $lastName;
		$this->firstName = $firstName;
		$this->allBook = [];
	}


	public function addBook($book)
	{
		$this->allBook[] = $book;
	}

	// SET  
	public function set_lastName(string $lastName)
	{
		$this->lastName = $lastName;
	}
	public function set_firstName(string $firstName)
	{
		$this->firstName = $firstName;
	}

	public function set_allBook($allBook)
	{
		$this->allBook = $allBook;
	}
	//

	// GET
	public function get_lastName(): string
	{
		return $this->lastName;
	}
	public function get_firstName(): string
	{
		return $this->firstName;
	}

	public function get_allBook()
	{
		return $this->allBook;
	}

	public function __toString()
	{
		return $this->get_firstName() . " " . $this->get_lastName();
	}

	//ajouter toutes les livres et leurs info par auteur
	public function afficherBibliographie()
	{

		$result = '<h2>Livres de ' . $this . '</h2>';
		foreach ($this->allBook as $book) {
			$result .= $book->get_title() . "(" . $book->get_yearPublication() . ") " . $book->get_numberPages() . " pages/ " . $book->get_price() . "€<br>";
		}
		return $result;
	}
}
