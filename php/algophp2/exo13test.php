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

    //getter (permet d'accéder a l'élement dans les attributs)
    public function getMarque(){
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getNbVoitures() {
        return $this->_nbPortes;
    }

    //setter (Permet de modifier la valeurs dans les attributs)
    public function setVitesseActuelle(int $vitesseActuelle) {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function setEtatVoiture($etatVoiture) {
        $this->_etatVoiture = $etatVoiture;
    }

    //faire function pour etat de la voiture 
    //si false alors je passe a true
    //public function estDemarrer()
    public function estDemarrer(bool $demarrer = true) {
        if ($demarrer) {
            $this->setEtatVoiture(true);
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." démarre";
        } else {
            $this->setEtatVoiture(false);
            echo 'Le véhicule '.$this->getMarque().' '.$this->getModele().' est stoppé';
        }
    }
    
    


    //function accelerer()
    //faire function si etat voiture a true alors je peux accelerer
    //sinon je dois passez etat a true (function estDemarrer)
    public function accelerer($vitesseAugmentation) {
        if($this->_etatVoiture == true) {
            $this->_vitesseActuelle += $vitesseAugmentation;
            echo "Le véhicule ".$this->getMarque()." ".$this->getModele()." accélère de ".$vitesseAugmentation." km/h";
        }
        else {
            echo "Pour accélerer, il faut démarrer le véhicule ".$this->getMarque()." ".$this->getModele();
        }
    }


    // créer public function __toString 
    //pour affichage 2 et 3 car ils sont pareils
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
    
    public function ralentir($vitesseDiminution) {
        if ($this->_vitesseActuelle > 0) {
            $this->_vitesseActuelle -= $vitesseDiminution;
            $this->_etatVoiture = 'Ralentit de ' . $vitesseDiminution . ' km/h';
        }
    }
    public function toStringFin() {
        echo "La vitesse du véhicule ".$this->_marque." ".$this->_modele." est de ".$this->_vitesseActuelle." km/h";
    }
}

    $v1 = new Voiture("peugeot", "408", 5);
    $v2 = new Voiture("Citroen", "C4", 3);

    //Information affichage1
    $v1->estDemarrer();
    echo"<br>";
    $v1->accelerer(50);
    echo "<br>";
    $v2->estDemarrer();
    echo "<br>";    
    $v2->estDemarrer(false);
    echo "<br>";
    $v2->accelerer(20);    
    echo "<br>";
    $v1->toStringFin();
    echo "<br>";
    $v2->toStringFin();
    echo "<br>";

    //Information affichage2
    //Utiliation des méthodes pour définir l'état du véhicule, vitesse etc
    //Appelle de la focntion toString par l'objet v1 avec -> qui permet d'accéder aux élements
    $v1->toString();
    echo "<br>";
    //Information affichage 3
    $v2->toString();











    // public function demarrer() {
    //     $this->_etatVoiture = true;
    //     echo "Le véhicule". 
    // }

    // public function stopper() {
    //     $this->_etatVoiture = false;
    // }

    // }

    // public function accelerer($vitesseAugmentation) {
    //     if ($this->_vitesseActuelle > 0 || empty($this->_etatVoiture)) {
    //         $this->_vitesseActuelle += $vitesseAugmentation;
    //         $this->_etatVoiture = "accélère de $vitesseAugmentation km/h";
    //     } else {
    //         $this->_etatVoiture = "Pour accélérer, il faut démarrer le véhicule {$this->_marque} {$this->_modele}";
    //     }
    // }

    // public function affichage1InformationsVoitures() {
        
    //     echo 'Le véhicule ' . $this->_marque . ' ' . $this->_modele . ' ';
    //     if ($this->_etatVoiture) {
    //         echo 'est démarré.';
    //     } else {
    //         echo 'est arrêté.';
    //     }
    //     echo '<br>';
    // }

    // public function affichage2InformationsVoitures() {
    //     echo '<br>';
    //     echo 'Infos véhicule ' . $this->_marque . ' ' . $this->_modele . '<br>';
    //     echo '*************************<br>';
    //     echo 'Nom et modèle du véhicule : ' . $this->_marque . ' ' . $this->_modele . '<br>';
    //     echo 'Nombre de portes : ' . $this->_nbPortes . '<br>';
    //     echo 'Le véhicule ' . $this->_marque . ' ' . $this->_modele . ' ' . $this->_etatVoiture . '<br>';
    //     echo 'Sa vitesse actuelle est de : ' . $this->_vitesseActuelle . ' km/h<br>';
    //     echo '<br>';
    // }

    // public function affichage3InformationsVoitures() {
    //     echo 'Infos véhicule ' . $this->_marque . ' ' . $this->_modele . '<br>';
    //     echo '**********************<br>';
    //     echo 'Nom et modèle du véhicule : ' . $this->_marque . ' ' . $this->_modele . '<br>';
    //     echo 'Nombre de portes : ' . $this->_nbPortes . '<br>';
    //     echo 'Le véhicule ' . $this->_marque . ' ' . $this->_modele . ' ' . $this->_etatVoiture . '<br>';
    //     echo 'Sa vitesse actuelle est de : ' . $this->_vitesseActuelle . ' km/h<br>';
    //     echo '<br>';
    // }

    // public function getMarque() {
    //     return $this->_marque;
    // }


// Création d'objets


// // Utilisation des méthodes v1
// $v1->demarrer();
// $v1->affichage1InformationsVoitures();
// $v1->accelerer(50);
// $v1->affichage1InformationsVoitures();
// $v1->ralentir(60);

// // Utilisation des méthodes v2
// $v2->demarrer();
// $v2->affichage1InformationsVoitures();
// $v2->stopper();
// $v2->affichage1InformationsVoitures();
// $v2->accelerer(20);
// $v2->affichage1InformationsVoitures();

// // AFFICHAGE 2
// $v1->affichage2InformationsVoitures();

// // AFFICHAGE 3
// $v2->affichage3InformationsVoitures();
// // 