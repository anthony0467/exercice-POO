<?php


class Titulaire
{
	private string $lastName;
	private string $firstName;
	private DateTime $date;
	private string $city;
	private array $bankAccounts;

	// CONSTRUCTOR
	function __construct(string $lastName, string $firstName, string $date, string $city)
	{
		$this->lastName = $lastName;
		$this->firstName = $firstName;
		$this->date = new DateTime($date);
		$this->city = $city;
		$this->bankAccounts = [];
	}

	public function addAccount($account)
	{
		$this->bankAccounts[] = $account;
	}

	// SET  
	function set_lastName(string $lastName)
	{
		$this->lastName = $lastName;
	}
	function set_firstName(string $firstName)
	{
		$this->firstName = $firstName;
	}
	function set_date($date)
	{
		$this->date = $date;
	}
	function set_city(string $city)
	{
		$this->city = $city;
	}
	function set_bankAccount($bankAccount)
	{
		$this->bankAccounts = $bankAccount;
	}

	// GET
	function get_lastName(): string
	{
		return $this->lastName;
	}
	function get_firstName(): string
	{
		return $this->firstName;
	}
	function get_date()
	{
		return $this->date;
	}
	function get_city(): string
	{
		return $this->city;
	}
	function get_bankAccounts()
	{
		return $this->bankAccounts;
	}

	// CALCUL AGE

	function age()
	{
		$aujourdhui = new DateTime();
		$diff = date_diff($this->date, $aujourdhui);
		return $diff->format('%y ans');
	}
	// transformer l'objet en string
	public function __toString()
	{
		return $this->get_firstName() . " " . $this->get_lastName();
	}

	public function afficherInfo()
	{

		echo "Le nom du titulaire est " . $this . ". Il est agé de " . $this->age($this->date) . ". <br>";

		$result =  'Liste des comptes: <ul>';

		foreach ($this->bankAccounts as $account) {
			$result .= '<li>' . $account->get_libelle() . '</li>';
		}
		return $result . '</ul>';
	}
}

   // $client1 = new Titulaire('Doe', 'John', )
    


   //echo $client1->age("15-10-1980");
