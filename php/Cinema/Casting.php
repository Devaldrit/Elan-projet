<?php
    Class Casting {
        private Film $_film;
        private Acteur $_acteur;
        private Role $_role;

        public function __construct(Film $film, Role $role, Acteur $acteur) {
            $this->_role = $role;
            $this->_film = $film;
            $this->_acteur = $acteur;
            $role->ajouterFilmCast($this);
            $acteur->ajouterFilmCast($this);
            $film->ajouterFilmCast($this);
        }
        public function getFilm() {
            return $this->_film;
        }
    
        public function getRole() {
            return $this->_role;
        }
    
        public function getActeur() {
            return $this->_acteur;
        }

        /*Getter pour récuperer les informations dans
        les classes respectives pour la fonction castingFilm()*/
        public function getTitre() {
            return $this->_film->getTitre();
        }

        public function getNomPersonnage() {
            return $this->_role->getNomPersonnage();
        }

        public function getNomComplet() {
            return $this->_acteur->getNomComplet();
        }

        //Lister casting d'un film
        public function castingFilm() {
            echo "<h3>Dans le film  " . $this->getTitre() . "</h3>";
            echo "<p>" . $this->getNomPersonnage() . " a été incarné par " . $this->getNomComplet() . " , </p>";
        }
        
    }