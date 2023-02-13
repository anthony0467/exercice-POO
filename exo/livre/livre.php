<?php 

class livre{
    private string $title;
    private int $numberPages;
    private $yearPublication;
    private int $price;
    private Auteur $auteur;

    public function __construct(string $title, int $numberPages, $yearPublication, int $price, Auteur $auteur){
        $this-> title = $title;
        $this-> numberPages = $numberPages;
        $this-> yearPublication = $yearPublication;
        $this-> price = $price;
        $this-> auteur = $auteur;
    }

    //SET
    public function set_title(string $title){
        $this-> title = $title;
    }

    public function set_numberPages(int $numberPages){
        $this-> numberPages = $numberPages;
    }

    public function set_yearPublication( $yearPublication){
        $this-> yearPublication = $yearPublication;
    }
    
    public function set_price(int $price){
        $this-> price = $price;
    }

    public function set_auteur(Auteur $auteur){
        $this-> auteur = $auteur;
    }


    //GET

    public function get_title(){
       return  $this-> title;
    }

    public function get_numberPages(){
        return $this-> numberPages;
    }

    public function get_yearPublication(){
        return $this-> yearPublication;
    }

    public function get_price(){
        return $this-> price;
    }

    public function get_auteur(){
        return $this-> auteur;
    }



}
?>