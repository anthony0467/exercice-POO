<?php
    

    class Titulaire{
        private string $lastName;
        private string $firstName;
        private  $date;
        private string $city;
        private array $bankAccounts;

        // CONSTRUCTOR
        function __construct(string $lastName, string $firstName, $date, $city){
            $this->lastName = $lastName;
            $this->firstName = $firstName;
            $this->date = $date;
            $this->city = $city;
            $this->bankAccounts = [];
        }
        
        public function addAccount($account){
            $this->bankAccounts[] = $account;
        }

        // SET  
        function set_lastName(string $lastName){
            $this->lastName = $lastName;
        }
        function set_firstName(string $firstName){
            $this->firstName = $firstName;
        }
        function set_date( $date){
            $this->date = $date;
        }
        function set_city(string $city){
            $this->city = $city;
        }
        function set_bankAccount( $bankAccount){
            $this->bankAccounts = $bankAccount;
        }

        // GET
        function get_lastName(): string{
            return $this-> lastName;
         }
         function get_firstName(): string{
            return $this-> firstName;
         }
         function get_date(){
            return $this->date;
         }
         function get_city(): string{
            return $this-> city;
         }
         function get_bankAccounts(){
            return $this-> bankAccounts;
         }

         // CALCUL AGE

        function age($date){
            $aujourdhui = date("d-m-Y");
            $diff = date_diff(date_create($date), date_create($aujourdhui));
            return $diff->format('%y ans');
        }
        public function __toString()
        {
            return $this->get_firstName() . " " . $this->get_lastName();
        }

        public function infoBank(){
            echo "Le nom du titulaire est " .$this->firstName. " " .$this->lastName. ". Il est agé de " .$this->age($this->date). " ans. Liste des comptes: " .$this->bankAccounts."<br>";
        }
    }

   // $client1 = new Titulaire('Doe', 'John', )
    


   //echo $client1->age("15-10-1980");

     ?>
