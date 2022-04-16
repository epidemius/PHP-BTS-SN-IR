<?php

require_once 'interface.php';

class humain implements Mortel {
    protected $nom;

    public function __construct($nom){
        $this-> nom = $nom;
    }

    protected function getNom(){
        return $this->nom;
    }
    protected function setNom(){
        $this -> nom = $nom;
    }
    public function meurt(){
        echo $this->nom." est mort";
    }

}

class etudiant extends humain{
    private $note;

    public function __construct($nom,$note){

        parent::__construct($nom);

        $this -> note = $note;
    }

    public function getNote(){
        return $this -> note;
    }
    public function setNote(){
        $this -> nom = $note;
    }

}

class prof extends humain {
    protected $salaire;

    public function __construct($nom,$salaire){

        parent::__construct($nom);

        $this -> salaire =$salaire;
    }

    protected function getSalaire(){
        return $this -> salaire;
    }
    
    protected function getNom(){
    
        parent::getNom();
        return $this -> nom;

    }

    protected function setSalaire(){
        $this-> salaire = $salaire;
    }
}

abstract class titulaire extends prof{
    protected $couleur;

    public function getCouleur(){
        return $this -> couleur;
    }

    public function setCouleur(){
        $this -> couleur = $couleur;
    }

    abstract public function setCouleurDefaut();

    public function __construct($nom,$salaire,$couleur){

        parent::__construct($nom,$salaire);

        $this -> couleur = $couleur;

    }

}

class maitreDeConference extends titulaire{

     function setCouleurDefaut(){
            $this -> couleur = $couleur;
         }
    public function __construct($nom,$salaire,$couleur){
        parent::__construct($nom,$salaire,$couleur);
    }
    
}

class agrege extends titulaire {
    function setCouleurDefaut(){
        $this -> couleur = $couleur;
     }
    public function __construct($nom,$salaire,$couleur){
        parent::__construct($nom,$salaire,$couleur);
    }
}

?>