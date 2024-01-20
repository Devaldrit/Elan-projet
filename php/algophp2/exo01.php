<?php
//Function which style your text into red color and transform it in uppercase
$text = convertirMajRouge("Mon texte en parametre");
function convertirMajRouge($chaineDeCaracteres){
    echo '<span style="color: red;">' . strtoupper($chaineDeCaracteres) . '</span>';
    return $chaineDeCaracteres;
}