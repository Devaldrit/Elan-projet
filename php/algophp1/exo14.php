<?php
$dob = new DateTime("1993-07-01");
$today = new DateTime('today');
$year = $dob->diff($today)->y;
$month = $dob->diff($today)->m;
$day = $dob->diff($today)->d;
echo "Age de la personne :"." ".$year." ans"." ",$month." mois"." ".$day." jours";