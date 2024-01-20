<?php

class Livre {
    private string $_titre;
    //on utilise DareTime en tant que type de donnee
    private DateTime $_dateParution;
    private int $_nbPages;
    private float $_prix;
    private Auteur $_auteur;

    public function __construct(string $titre, string $dateParution, int $nbPages, float $prix, Auteur $auteur) {
        $this->_titre = $titre;
        $this->_dateParution = new DateTime($dateParution);
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        //faire chainage avec auteur pour recup la methode ajouterLivres
        $auteur->ajouterLivre($this);
    }

    //getter
    public function getTitre() {
        return $this->_titre;
    }
    
    public function getDateParution() {
        return $this->dateParution;
    }

    public function getNbPages() {
        return $this->_nbPages;
    }

    public function getPrix() {
        return $this->_prix;
    }

    // public function getAuteur(){
    //     return $this->_auteur;
    // }

    //setter
    public function setTitres($titre) {
        $this->_titre = $titre;
    }
    
    public function setDateParution($dateParution) { //a revoir après modification de la fonction
        $this->dateParution = $dateParution;
    }

    public function setNbPages($nouveauNbPages) {
        $this->_nbPages = $nouveauNbPages;
    }

    public function setPrix($nouveauPrix) {
        $this->_prix = $nouveauPrix;
    }

    // public function setAuteur($nouveauAuteur){
    //     $this->_auteur = $nouveauAuteur;
    // }


    //function pour afficher juste la date de parution 
    public function dateParution($dateParution) {
        echo date('d/m/Y',strtotime($dateParution));
    }

    //Fonction pour afficher les informations des livres
    public function __toString() {
        return $this->_titre . " (" . $this->_dateParution->format('d/m/Y') . ") : " . $this->_nbPages . " pages / " . $this->_prix . " €";
    }
    
}
