<?php
Class Compte {
    private string $_libelle; //type de compte (courant, livret A etc)
    private float $_solde;  //somme du compte
    private string $_devise; // unité monétaire (euro, franc, dollar etc)
    private Titulaire $_titulaire; //personne a qui appartient le compte
    
    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }


    //Getter
    public function getLibelle() {
        return $this->_libelle;
    }

    public function getSolde() {
        return $this->_solde;
    }

    public function getDevise() {
        return $this->_devise;
    }

    public function getTitulaire() {
        return $this->_titulaire;
    }

    //Setter
    public function setLibelle($libelle) {
        $this->_libelle = $libelle;
    }

    public function setSolde($solde) {
        $this->_solde = $solde;
    }

    public function setDevise($devise) {
        $this->_devise = $devise;
    }

    /* Functions pour obtenir les propriétés 
    Nom et Prénom du Titulaire depuis le fichier Titulaire.php */
    public function obtenirNomTitulaire() {
        return $this->_titulaire->getNom();
    }
    
    public function obtenirPrenomTitulaire() {
        return $this->_titulaire->getPrenom();
    }

    //faire function pour créditer un compte de x euros
    public function crediterArgent($montant) {
        if($montant > 0) {
            $this->_solde += $montant;
            return "Le compte a été créditer de".$montant." ,le nouveau montant est de ".$this->_solde;
        } else {
            return "Le montant doit être positif pour créditer le compte.";
        }
    }
    //faire function pour débiter de x euros
    public function debiterArgent($montantRetirer) {
        if($montantRetirer > 0) {
            $this->_solde -= $montantRetirer;
            return "Le compte a été débiter de".$montantRetirer." ,le nouveau montant est de ".$this->_solde;
        } else {
            return "Le montant doit être positif pour débiter le compte.";
        }
    }
    //faire function pour effectuer un virement d'un compte à l'autre
    public function effectuerVirement(Compte $destinataire, $montant) {
        //verifie si le montant a transférer est positif
        if ($montant > 0) {
            if ($this->_solde >= $montant) {
                $this->_solde -= $montant;
                $destinataire->crediterArgent($montant);
                return "Virement de ".$montant." ".$this->_devise.".Noueau solde : ".$this->_solde." ".$this->_devise;
            } else {
                echo "Le solde n'est pas suffisant, pour effectuer le virement de ".$montant." €. <br>";
            }
        } else {
            return 'Le montant doit être positif';
        }
    }
    
    public function __toString()
    {
        return 
            "Libellé du compte: " . $this->_libelle."<br>".
            "Solde initial: " . $this->_solde."<br>".
            "Devise Monétaire: " . $this->_devise."<br>".
            "<br>";
    }
}