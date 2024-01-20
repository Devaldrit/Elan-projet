<?php 
function alimenterListeDeroulante($elements) {
    echo '<select>';
    foreach ($elements as $elementList ){
        echo '<option>'.$elementList.'</option>';
    }
    echo '</select>';
}

$elements = array ("Monsieur", "Madame", "Mademoiselle");
alimenterListeDeroulante($elements);
?>