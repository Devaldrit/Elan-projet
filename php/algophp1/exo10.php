<?php

// Lire le montant à payer et la somme versée
$montantAPayer = 30; // 
$sommeVersee = 50; // 

// Calculer la différence (le rendu)
$rendu = $sommeVersee - $montantAPayer;

// Calculer les billets et les pièces nécessaires
$billets10 = intdiv($rendu, 10);
$reste = $rendu % 10;

$billets5 = intdiv($reste, 5);
$reste = $reste % 5;

$pieces2 = intdiv($reste, 2);
$pieces1 = $reste % 2;

// Afficher les résultats
echo "Montant à payer : "."$montantAPayer"."<br>";
echo "Montant versé : "."$sommeVersee"."<br>";
echo "Reste à payer : "."$rendu"."<br>";
echo "***************************************************"."<br>";
echo " $billets10\n Billets de 10 € -";
echo " $billets5\n Billets de 5 € -";
echo " $pieces2\n Pièces de 2 € -";
echo " $pieces1\n Pièces de 1 €";

?>
