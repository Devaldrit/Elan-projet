<?php
$quantiteArticles = 5;
$prixHorsTVA = 9.99;
$tauxTVA = 0.2;

$montantHT = $quantiteArticles * $prixHorsTVA;
$montantTVA = $montantHT * $tauxTVA;
$montantFacture = $montantHT + $montantTVA;

echo "Quantité d'articles : $quantiteArticles" . "<br>";
echo "Prix hors TVA par article : $prixHorsTVA €" . "<br>";
echo "Taux de TVA : $tauxTVA" . "<br>";
echo "Montant hors TVA : $montantHT €" . "<br>";
echo "Montant de la TVA : $montantTVA €" . "<br>";
echo "Le montant de la facture à régler est de : $montantFacture €" . "<br>";
?>
