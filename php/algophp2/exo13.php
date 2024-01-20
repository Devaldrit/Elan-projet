<?php

class Voiture {
    protected string $_marque;
    protected string $_modele;
    protected string $_nbPortes;
    protected int $_vitesseActuelle = 0;
    private bool $_etatVoiture = false;

    public function __construct(string $marque, string $modele, string $nbPortes) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
    }

    public function getMarque(){
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getNbVoitures() {
        return $this->_nbPortes;
    }

    public function setVitesseActuelle(int $vitesseActuelle) {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function setEtatVoiture($etatVoiture) {
        $this->_etatVoiture = $etatVoiture;
    }

    public function estDemarrer() {
        if($this->_etatVoiture == false){
            $this->setEtatVoiture(true);
            if( $this->_etatVoiture == true){
                echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre";
            }
        }
    }
    public function getVitesseActuelle() {
        return $this->_vitesseActuelle;
    }

    public function accelerer($vitesseAugmentation) {
        if($this->_etatVoiture == true) {
            $this->_vitesseActuelle += $vitesseAugmentation;
            echo "Le véhicule ".$this->getModele()." veut accélérer de ".$vitesseAugmentation." km/h";
        }
        else {
            echo "Pour accélérer, il faut démarrer le véhicule ";
        }
    }

    public function toString() {
        echo "<br>";
        echo "Infos Vehicule"."<br>";
        echo "**********************"."<br>";
        echo "Nom et modèle du véhicule : ".$this->_marque." ".$this->_modele;
        echo "<br>";
        echo "Nombres de portes : ".$this->_nbPortes;
        echo "<br>";
        echo "Le véhicule ".$this->_marque." est ".($this->_etatVoiture ? 'démarré' : 'éteint');
        echo "<br>";
        echo "Sa vitesse actuelle est de : ".$this->_vitesseActuelle;
    }

    public function affichage1(Voiture $voiture1, Voiture $voiture2) {
        echo "<br>";
        $voiture1->estDemarrer();
        echo "<br>";
        $voiture2->accelerer(50);
        echo "<br>";
        echo "Le véhicule ".$voiture1->getMarque()." ".$voiture1->getModele()." accélère de ".$voiture1->getVitesseActuelle()." km/h";
        echo "<br>";

        $voiture2->estDemarrer();
        echo "<br>";
        echo "Le véhicule ".$voiture2->getMarque()." ".$voiture2->getModele().($voiture2->getEtatVoiture() ? ' démarre' : ' est stoppé');
        echo "<br>";
        echo "Le véhicule ".$voiture2->getMarque()." ".$voiture2->getModele().($voiture2->getEtatVoiture() ? ' démarre' : ' est stoppé');
    }

    public function affichage2() {
        $this->estDemarrer();
        $this->accelerer(50);
        $this->toString();
    }

    public function affichage3() {
        $this->toString();
    }
}

$v1 = new Voiture("peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 3);

$v1->affichage1($v1, $v2);
$v1->affichage2();
$v2->affichage3();
?>
