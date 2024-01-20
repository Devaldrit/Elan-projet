<?php
function formaterDateFr($dateString) {
    // Découpe de la date en trois parties
    $dateToDisplay = explode("-", $dateString);

    // Conversion du mois en lettres
    $numberMonth = array(
        '01' => "janvier", 
        '02' => "février", 
        '03' => "mars", 
        '04' => "avril", 
        '05' => "mai", 
        '06' => "juin",
        '07' => "juillet", 
        '08' => "août", 
        '09' => "septembre", 
        '10' => "octobre", 
        '11' => "novembre",
        '12' => "décembre",  
    );
    $monthInLetters = $numberMonth[$dateToDisplay[1]];

    // Traduction du jour de la semaine en français
    $daysInFrench = array(
        'Monday'    => 'lundi',
        'Tuesday'   => 'mardi',
        'Wednesday' => 'mercredi',
        'Thursday'  => 'jeudi',
        'Friday'    => 'vendredi',
        'Saturday'  => 'samedi',
        'Sunday'    => 'dimanche'
    );

    $dayInLetters = $daysInFrench[date('l', strtotime($dateString))];

    // Affichage de la date formatée
    echo $dayInLetters . " " . $dateToDisplay[2] . " " . $monthInLetters . " " . $dateToDisplay[0];
}

// Exemple d'utilisation
formaterDateFr("2018-02-23");
?>
