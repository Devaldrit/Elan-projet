<?php

class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getAge() {
        $aujourdHui = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $aujourdHui->diff($dateNaissance);

        return $difference->y;
    }
}

// Instanciation des personnes
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

// Affichage des informations
echo $p1->getPrenom() . "\n"." ";
echo $p1->getNom() . "\n";
echo "a ".$p1->getAge() . " ans\n"."<br>";


echo $p2->getPrenom() . "\n";
echo $p2->getNom() . "\n";
echo "a ".$p2->getAge() . " ans\n";

?>
