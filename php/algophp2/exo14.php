<?php 

//class parent
class Voiture {

    //public, on peut y accéder depuis l'éxterieur d'une classe
    //private, on doit utiliser des méthodes publique pour pour définir ou obtenir la valeur
    //protected, similaire aux private

    //et on type 
    protected string $_marque;
    protected string $_modele;
    
    //method pour instancier les proprietes et les reutiliser dans les autres methodes
    public function __construct($marque, $modele){
        $this->_marque = $marque;
        $this->_modele = $modele; 
    }
    //method permet d'acces a marque
    public function getMarque(){
        return $this->_marque;
    }
    
    public function getInfos() {
        return "Marque: " . $this->_marque . ", Modèle: " . $this->_modele;
    }
    
}


//class héritaire
class VoitureElec extends Voiture {

    //
    private int $_autonomie;

    public function __construct($marque, $modele, $autonomie ){
        parent ::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }
    
    public function getInfos() {
        return parent::getInfos() . ", Autonomie: " . $this->_autonomie;
    }
}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", "100");

echo $v1->getInfos().'<br>';
echo $ve1->getInfos().'<br>';