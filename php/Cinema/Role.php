<?php
    Class Role {
        private string $_nomPersonnage;
        private array $_tabFilmCast;

        public function __construct(string $nomPersonnage) {
            $this->_nomPersonnage = $nomPersonnage;
            $this->_tabFilmCast = [];
        }

        //GETTER
        public function getNomPersonnage() {
            return $this->_nomPersonnage;
        }

        //Setter
        public function setNomPersonnage($nomPersonnage) {
            $this->_nomPersonnage = $nomPersonnage;
        }

        // Ajouter un casting associé à ce rôle
        public function ajouterFilmCast(Casting $casting) {
            $this->_tabFilmCast[] = $casting;
        }

        // Obtenir la liste des castings associés à ce rôle
        public function getCastings() {
            return $this->_tabFilmCast;
        }

        //Function pour liste des acteurs ayant incarné un rôle précis 
        public function roleIncarnerActeurs() {
            echo "<h3>"."Les acteurs ayant joué le rôle de " . $this->_nomPersonnage . " : "."</h3>";
            foreach ($this->_tabFilmCast as $casting) {
                $acteur = $casting->getActeur();
                echo '<p>' . $acteur->getNomComplet() . '</p>' . ",";
            }
            echo "\n";
        }
    }