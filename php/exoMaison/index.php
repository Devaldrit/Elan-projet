<?php
$etudiants = [
    $bastien = [
        "nom" => "DuPont",
        "prenom" => "Bastien",
        "age" => "19 ans",
        "notes" => [10, 20, 15, 7, 18]
    ],
    $Paul = [
        "nom" => "Jean",
        "prenom" => "Paul",
        "age" => "21 ans",
        "notes" => [11, 9, 16, 6, 20]
    ],
];

function calculerMoyenne(array $tableauMoyenne) {
    //Compter le totale des notes
    $totalNotes = count($tableauMoyenne);
    //Calculer la sommme totales des notes
    $sommeTotalNotes = array_sum($tableauMoyenne);
    //operation pour avoir la moyenne courante du tableau
    $moyenne = $sommeTotalNotes / $totalNotes;
}
// calculerMoyenne($etudiants[2]["notes"]);
print_r($etudiants[1]["notes"]);
calculerMoyenne($etudiants[1]["notes"]);
