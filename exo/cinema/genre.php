<?php

class Genre{
	private string $genre;

	public function __construct(string $genre){
		$this->genre = $genre;
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
	
}
