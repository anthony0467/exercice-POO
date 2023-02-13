
<?php 


class Bank{
    private string $libelle;
    private int $solde;
    private string $devise;
    private Titulaire $titulaire;

    public function __construct(string $libelle, int $solde, string $devise, Titulaire $titulaire) {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addAccount($this);

    }

    // SET

    public function set_libelle(string $libelle){
        $this->libelle = $libelle;
    }
    public function set_solde(int $solde){
        $this->solde = $solde;
    }
    public function set_devise(string $devise){
        $this->devise = $devise;
    }
    public function set_titulaire( $titulaire){
        $this->titulaire = $titulaire;
    }

    // GET

    public function get_libelle(): string{
        return $this->libelle ;
    }

    public function get_solde(): int{
        return $this->solde;
    }

    public function get_devise(): string{
        return $this->devise;
    }
    public function get_titulaire(){
        return $this->titulaire;
    }

    public function afficherInfos(){
        echo "Le nom du titulaire est ".$this->titulaire->get_firstName()." ".$this->titulaire->get_lastName(). ". Il à un compte: ".$this->libelle. " d'un montant de " .$this->solde. " " .$this->devise; 
    }



    public function debit(int $debitSolde){
        $this->set_solde($this->get_solde() - $debitSolde) ;
        echo "le compte ".$this->libelle. " a été débité de ".$debitSolde;
    }

    public function credit(int $creditSolde){
         $this->set_solde($this->get_solde() + $creditSolde);
         echo "le compte ".$this->libelle. " a été crédité de ".$creditSolde;
    }


   
    

}





?>
