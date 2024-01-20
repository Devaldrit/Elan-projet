<?php
//Extend Class Acteur
Class Acteur extends Personne{
    private array $_tabFilmCast;
    public function __construct(string $nom, string $prenom, string $sexe ,string $dateDeNaissance) {
        parent :: __construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this->_tabFilmCast = [];
    }
    public function ajouterFilmCast(Casting $casting) {
        $this->_tabFilmCast[] = $casting;
    }

    public function getCastings() {
        return $this->_tabFilmCast;
    }

    public function getNomComplet() {
        return $this->getNom(). ' ' .$this->getPrenom();
    }
}