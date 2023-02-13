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

    





}
?>