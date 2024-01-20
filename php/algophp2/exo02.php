<?php
function afficherTableHTML($capitales) {
    ksort($capitales);
    asort($capitales);
    echo '<table border="1">';
    echo '<tr><th>pays</th><th>Capitale</th></tr>';
    foreach ($capitales as $pays => $capitale){
        echo '<tr><td>' .strtoupper($pays).'</td><td>' .$capitale.'</td></tr>';
    }
    echo '</table>';
    
}
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
afficherTableHTML($capitales);