<?php
    Class Genre {
        private string $_nomGenre;
        private array $_genresFilms;
        
        public function __construct(string $nomGenre) {
            $this->_nomGenre = $nomGenre;
            $this->_genresFilms = [];
        }

        //GETTER
        public function getNomGenre() {
            return $this->_nomGenre;
        }

        //SETTER
        public function setNomGenre($nomGenre) {
            $this->_nomGenre = $nomGenre;
        }

        public function ajouterFilmGenre(Film $film) {
            $this->_genresFilms[] = $film;
        }

        public function filmListGenre() {
            foreach ($this->_genresFilms as $FilmGenre) {
                echo $FilmGenre;
            }
        }


        //Function pour lister les films par genre
        // Function pour lister les films par genre
        public function listFilmsGenre() {
            echo "<h3>"."Le genre " . $this->getNomGenre() . " est associé aux films : "."</h3>";
            foreach($this->_genresFilms as $film) {
                echo '<p>' . $film->getTitre() . '</p>' . ', ';
            }
            echo "\n";
        } 
    }