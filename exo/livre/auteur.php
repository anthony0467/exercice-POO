<?php 

class Auteur{
    private string $lastName;
    private string $firstName;

    public function __construct(string $lastName, string $firstName){
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }

    // SET  
    function set_lastName(string $lastName){
        $this->lastName = $lastName;
    }
    function set_firstName(string $firstName){
        $this->firstName = $firstName;
    }

    //

    // GET
    function get_lastName(): string{
        return $this-> lastName;
     }
     function get_firstName(): string{
        return $this-> firstName;
     }
    
}

?>