<?php

class Adresse{

    private $numero;
    private $voie;
    private $ville;
    private $cp;

    public function __construct($numero, $voie, $ville, $cp)
    {
        $this -> numero = $numero;
        $this -> voie = $voie;
        $this -> ville = $ville;
        $this -> cp = $cp;
    }

   
    public function getNumero(){
        return $this->numero;
    }
    
    public function getVoie(){
        return $this->voie;
    }

    public function getVille(){
        return $this->ville;
    }

    public function getCp(){
        return $this->cp;
    }

    public function validerChaine($chaine, $taille)
    {
        if(strlen($chaine)<=$taille)
        {
            return $chaine;
        }

        else
        {
            return;
        }
}
}

class deposant extends personne{

    private $civilite;
    private $mail;
    private $adresse;

    // constructeur de la fille
    public function __construct($nom,$prenom,$civilite, $mail, $adresse)
    {
        //Appel du constructeur de la classe mère
        parent::__construct($nom,$prenom);

        // attribut de la classe fille
        $this -> civilite = $civilite;
        $this -> mail = $mail;
        $this -> adresse = $adresse;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function __toString()
    {
        try
            {
                return (string) $this->adresse;
                }
            catch (Exception $exception)
            {
                return'';
            }
    }
    function toHTML() {
        return parent::toHTML()." ". $this-> civilite." ". $this->mail." ". $this->getAdresse()->getNumero()." ".$this->getAdresse()->getVoie()." ".$this->getAdresse()->getVille()." ".$this->getAdresse()->getCp()." ";

}
}

class architecte extends personne{

    private $conseilRegional;
    private $adresse;
    private $telephone;

    // constructeur de la fille
    public function __construct($nom,$prenom,$conseilRegional, $adresse, $telephone)
    {
        //Appel du constructeur de la classe mère
        parent::__construct($nom,$prenom);

        // attribut de la classe fille
        $this -> conseilRegional = $conseilRegional;
        $this -> adresse = $adresse;
        $this -> telephone = $telephone;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function __toString()
    {
        try
            {
                return (string) $this->adresse;
                }
            catch (Exception $exception)
            {
                return'';
            }
    }

    public function validerTelephone(){
    if(strlen($telephone)==10)
        {
            return $this->$telephone;
        }
        else
        {
            return' ';
        }
    }
     function toHTML() {
        return parent::toHTML()." ". $this->conseilRegional." ". $this->getAdresse()->getNumero()." ".$this->getAdresse()->getVoie()." ".$this->getAdresse()->getVille()." ".$this->getAdresse()->getCp()." ".$this->telephone;

}
}

class personne{

    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom)
    {
        $this -> nom = $nom;
        $this -> prenom = $prenom;
    }
    public function getAdresse(){
        return $this->adresse;
    }


      public function toString()
    {
        try
            {
                return $this->getAdresse() -> getNumero()." ". $this->getAdresse() ->getVoie()." ". $this->getAdresse() ->getVille()." ".getCp();
                }
            catch (Exception $exception)
            {
                return'';
            }
    }

    public function validerChaine($chaine, $taille)
    {
        if(strlen($chaine)<=$taille)
        {
            return $chaine;
        }

        else
        {
            return;
        }
    }

   public function toHTML(){

            return $this->nom." ". $this->prenom;
    }
}


?>
