<?php
$age = 20;

if ($age >= 12) {
    $resultat = "Cadet";
} else if ($age >= 10) {
    $resultat = "Minime";
} else if ($age >= 8) {
    $resultat = "Pupille";
} else if ($age >= 6) {
    $resultat = "Poussin";
} else {
    $resultat = "Âge non valide pour une catégorie";
}

echo "L'enfant qui a $age ans appartient à la catégorie << $resultat >>";
?>
