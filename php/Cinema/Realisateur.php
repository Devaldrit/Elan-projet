<?php
//Extend Class Realisateur
Class Realisateur extends Personne{
    private array $_tabsFilms;

    public function __construct(string $nom, string $prenom, string $sexe , string $dateDeNaissance) {
        parent :: __construct($nom, $prenom, $sexe, $dateDeNaissance);
        // tableau ou seront stocker les film pour chaque realisateur
        $this->_tabsFilms = [];
    }


    //Fonction pour ajouter le Film dans le tableau
    public function ajouterFilm(Film $nouveauFilm) {
        return $this->_tabsFilms[] = $nouveauFilm;
    }

    //Fonction pour parcourir le tableau et afficher le film
    public function FilmsList() {
        foreach ($this->_tabsFilms as $film) {
            echo $film." ";
        }
    }

    public function afficher() {
        return $this->_nom . " " . $this->_prenom . " " . $this->_sexe . " " . $this->_dateDeNaissance->format('d/m/Y');
    }

    public function getNomComplet() {
        return $this->_nom. ' ' . $this->_prenom;
    }

    //liste de tous les fims d'un realisateur 
    public function listRealisateurFilms() {
        echo "<h3>"."Les Films réaliser par " . $this->getNomComplet() . " : "."</h3>";
        foreach($this->_tabsFilms as $film) {
            echo '<p>' . $film->getTitre() . '</p>' . ', ';
        }
    }
}