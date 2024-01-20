<?php 
function afficherRadio($nomsRadio) {
    echo '<form>';
    foreach ($nomsRadio as $elementRadio ){
        echo '<input type="radio" name="genre" />'.' '.'<label>'. $elementRadio .'</label>'."<br>";
    }
    echo '</form>';
}

$nomsRadio = array ("Masculin", "Féminin", "Autre");
afficherRadio($nomsRadio);
?>
