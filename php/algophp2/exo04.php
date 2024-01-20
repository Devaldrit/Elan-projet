<?php
function afficherTableHTML($capitales) {
    ksort($capitales);
    asort($capitales);
    echo '<table border="1">';
    echo '<tr><th>pays</th><th>Capitale</th><th>Wikipedia</th></tr>';
    foreach ($capitales as $pays => $capitale){
        echo '<tr>';
        echo '<td>' . strtoupper($pays) . '</td>';
        echo '<td>' . $capitale . '</td>';
        // Ajouter un lien Wikipedia spécifique à chaque pays
        echo '<td><a href="https://fr.wikipedia.org/wiki/' . strtolower($pays) . '" target="_blank">Voir sur Wikipedia</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}

$capitales = array ("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");
afficherTableHTML($capitales);
?>
