<?php 

class Auteur{
    private string $lastName;
    private string $firstName;
    private array $allBook;

    public function __construct(string $lastName, string $firstName){
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->allBook = [];
    }

    // SET  
    public function set_lastName(string $lastName){
        $this->lastName = $lastName;
    }
    public function set_firstName(string $firstName){
        $this->firstName = $firstName;
    }

    public function set_allBook(array $allBook){
        $this->allBook = $allBook;
    }
    //

    // GET
    public function get_lastName(): string{
        return $this-> lastName;
     }
     public function get_firstName(): string{
        return $this-> firstName;
     }

     public function __toString() {
        return $this->get_firstName() . " " . $this->get_lastName();
     }
    
}

?>