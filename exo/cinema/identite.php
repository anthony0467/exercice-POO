<?php 
class Identite{
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected string $dateNaissance;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = $dateNaissance;

    }

    //SET

    public function set_nom(string $nom){
        $this->nom = $nom;
    }

    public function set_prenom(string $prenom){
        $this->nom = $prenom;
    }

    public function set_sexe(string $sexe){
        $this->sexe = $sexe;
    }

    public function set_dateNaissance(string $dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }

    //GET

    public function get_nom(){
        return $this->nom;
    }

    public function get_prenom(){
        return $this->prenom;
    }

    public function get_sexe(){
        return $this->sexe;
    }

    public function get_dateNaissance(){
        return $this->dateNaissance;
    }

}
