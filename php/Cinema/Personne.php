<?php
    //Class Personne
    Class Personne {
        protected string $_nom;
        protected string $_prenom;
        protected string $_sexe;
        protected DateTime $_dateDeNaissance;

        //On définie le type string en paramètre de l'objet, a l'intérieur du contructeur on créer une nouvelle date
        public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
            $this->_nom = $nom;
            $this->_prenom = $prenom;
            $this->_sexe = $sexe;
            $this->_dateDeNaissance = new DateTime($dateDeNaissance);
        }
        //GETTER
        public function getNom(){
            return $this->_nom;
        }

        public function getPrenom() {
            return $this->_prenom;
        }

        public function getSexe() {
            return $this->_sexe;
        }

        public function getDateDeNaissance() {
            return $this->_dateDeNaissance;
        }

        //SETTER
        public function setNom($nom) {
            $this->_nom = $nom;
        }

        public function setPrenom($prenom) {
            $this->_prenom = $prenom;
        }

        public function setSexe($sexe) {
            $this->_sexe = $sexe;
        }

        public function setDateDeNaissance($dateDeNaissance) {
            $this->_dateDeNaissance = $dateDeNaissance;
        }

        public function dateDeNaissance($dateDeNaissance){
            echo date('d/m/Y', strtotime($dateDeNaissance));
        }

        public function __toString()
        {
            return $this->_nom . " </br>" . $this->_prenom . "</br>" . $this->_sexe . "</br>" . $this->_dateDeNaissance->format( 'd/m/Y') . "</br>"; 
        }
    }