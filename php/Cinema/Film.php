<?php
    Class Film {
        private array $tabFilmCast;
        private string $_titre;
        private DateTime $_dateDeSortie;
        private int $_duree;
        private string $_synopsis;
        /*Appelle de la classe ou objet Réalisateur (clé étrangère)
        Pour ajouter l'objet et ses propriétés dans le tableau de
        Realisateur créer, pour avoir par la suite à la fois
        avoir le réalisateur et ces films*/
        private Realisateur $_realisateur;
        
        /*Appelle de la classe,objet Genre pour par la suite ajouter 
        l'objet Film dans le tableau contenu dans la classe Genre
        chaque Genre vas avoir l'ensemble des films*/
        private Genre $_genre;


        /*
        Mise en place des objet dans le constructeur
        pour par la suite pouvoir les placer dans l'objet film (un objet dans l'objet)
        */
        public function __construct(string $titre, string $dateDeSortie, int $duree, string $synopsis, Realisateur $realisateur, Genre $genre){
            $this->_titre = $titre;
            $this->_dateDeSortie = new DateTime($dateDeSortie);
            $this->_duree = $this->convertirHeuresEnMinutes($duree);
            $this->_synopsis = $synopsis;
            $this->_realisateur = $realisateur;
            $this->_genre = $genre;
            $this->_tabFilmCast = [];

            /*
            Ajout des films dans le tableau realisateur (Realisateur avec tout ces films)
            */
            $realisateur->ajouterFilm($this);

            /*
            Ajout des films créer dans le genre (Genre avec tout ces films)
             */
            $genre->ajouterFilmGenre($this);
        }

        //GETTER
        public function getTitre() {
            return $this->_titre;
        }
        public function getDateDeSortie() {
            return $this->_dateDeSortie;
        }

        public function getDuree() {
            return $this->_duree;
        }

        public function getSynopsis() {
            return $this->_synopsis;
        }
        //SETTER
        public function setTitre($titre) {
            $this->_titre = $titre;
        }

        public function setDateDeSortie(DateTime $dateDeSortie) {
            $this->_dateDeSortie = $dateDeSortie;
        }

        public function setDuree($duree) {
            $this->_duree = $duree;
        }

        public function setSynopsis($synopsis) {
            $this->_synopsis = $synopsis;
        }

        public function ajouterFilmCast(Casting $nouveauCasting) {
            return $this->_tabFilmCast[] = $nouveauCasting;
        }

        public function ListCastFilm() {
            foreach ($this->_tabFilmCast as $film) {
                echo $film;
            }
        }


        //Function pour afficher date de sortie
        public function dateDeSortie($dateDeSortie) {
            echo date('d/m/Y', strtotime($dateDeSortie));
        }

        //Faire les functions pour créer tableau, ajouter dans le tableau et le parcourir pour le tableau pour l'afficher

        public function __toString() {
            return $this->_titre . " " . $this->_dateDeSortie->format('d/m/Y') . " " . $this->_duree . " " . $this->_synopsis . " " . $this->_realisateur; 
        }

        //Liste de tous les acteurs ayant jouer dans un film
        public function listActeursFilm() {
            echo "<h3>"."Acteurs ayant jouer dans le film $this->_titre : "."</h3>";
            foreach ($this->_tabFilmCast as $casting) {
                $acteur = $casting->getActeur();
                echo '<p>' . $acteur->getNomComplet() . '</p>' . ",";
            }
            echo "\n";

        }

        //faire function pour convertir heures en minutes
        private function convertirHeuresEnMinutes(float $minutes) {
            return round($minutes / 60);
        }
        
    }