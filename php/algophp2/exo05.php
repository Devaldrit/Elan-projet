<?php 
function afficherInput($nomsInput) {
    echo '<form>';
    foreach ($nomsInput as $textField ){
        echo '<label>'. $textField.'</label>'.'<br>';
        echo '<input type="text">'.'<br>';
    }
    echo '</form>';
}

$nomsInput = array ("Nom", "Prénom", "Ville");
afficherInput($nomsInput);
?>
