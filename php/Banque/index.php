<?php

// Inclure les définitions de classes
include 'Titulaire.php';
include 'Compte.php';

// Créer un titulaire
$t1 = new Titulaire('Doe', 'John', '1990-01-15', 'Paris');

// Créer un compte associé à ce titulaire
$c1 = new Compte('Compte Courant', 1000.0, 'EUR', $t1);

// Ajouter un autre compte au même titulaire
$c2 = new Compte('Livret A', 5000.0, 'EUR', $t1);

// Afficher les informations du titulaire

/*Les informations de  $t1 s'affichent a l'aide de la fonction _toString() 
 qui est directement dans la classe titulaire,
 donc l'objet utilisera de base la fonction toString de sa propre classe et 
 executera par la suite 
*/
echo $t1->listeCompte();

echo "<br><br> apres virement <br><br>";

$c1->effectuerVirement($c2, 1011);

echo $t1->listeCompte();
/*
<?php
require 'Compte.php';
require 'Titulaire.php';

// Création des titulaires
$titulaire = new Titulaire('Jean', 'Pierre', $dateNaissance, 'Mulhouse');

// Création des comptes
$compte1 = new Compte('Courant', 998.23, '$', $titulaire);

echo $titulaire->toStringTitulaire();
echo '<br>';
echo $compte1->toStringCompteBancaire();
?>
*/