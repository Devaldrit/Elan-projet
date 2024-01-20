<?php
Class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_compte;

    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_ville = $ville;
        $this->_comptes = [];
    }


    //GETTER
    public function getNom() {
        return $this->_nom;
    }

    public function getPrenom() {
        return $this->_prenom;
    }

    public function getDateNaissance() {
        return $this->_dateNaissance;
    }

    public function getVille() {
        return $this->_ville;
    }

    public function getComptes() {
        return $this->_comptes;
    }

    //SETTER
    public function setNom($prenom) {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }

    public function setDateNaissance($dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }

    public function setVille($ville) {
        $this->_ville = $ville;
    }

    public function setComptes($compte) {
        $this->_compte = $compte;
    }

    //function pour afficher la date de naissance
    public function dateDeNaissance($dateDeNaissance) {
        echo date('d/m/Y',strtotime($dateDeNaissance));
    }

    //function pour ajouter le compte dans le tableau
    public function ajouterCompte(Compte $nouveauCompte) {
        return $this->_comptes[] = $nouveauCompte;    
    }
    
    //Function pour parcourir le tableau de compte
    public function listeCompte() {
        echo "Les comptes de : ".$this."<br>";
        foreach ($this->_comptes as $compte) {
                echo $compte; 
            }
    }
    
    

    public function __toString() {
        return 
                "<br>Nom : ".$this->_nom." ".$this->_prenom."<br>".
                "Date de Naissance : ".$this->_dateNaissance->format('d/m/Y')."<br>".
                "Ville : ".$this->_ville."<br>*************************";
            
    }
    

    //faire toString pour afficher toutes les informations du titulaire et l'ensemble des comptes
    // public function __toStringTitulaire() {
    //     return "Nom : " . $this->_nom . " Prénom : " . $this->_prenom . " Date de naissance : " .
    //         $this->_dateNaissance->format('d/m/Y') . " Ville : " . $this->_ville;
    // }
}