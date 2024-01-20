<?php 
//Fonction pour partie nom, prénom et ville
$nomsInput = array ("Nom", "Prénom", "Adresse e-mail", "ville");
function afficherInput($nomsInput) {
    echo '<form>';
    foreach ($nomsInput as $textField ){
        echo '<label>'. $textField.'</label>'.'<br>';
        echo '<input type="text">'.'<br>';
    }
    echo '</form>';
}
//fonction pour demander le sexe de la personne
$nomsRadio = array ("Masculin", "Féminin", "Autre");
function afficherRadio($nomsRadio) {
    echo '<form>';
    foreach ($nomsRadio as $elementRadio ){
        echo '<input type="radio" name="genre" />'.' '.'<label>'. $elementRadio .'</label>'."<br>";
    }
    echo '</form>';
}
// fonction pour demander un intitulé de formation
function genererCheckbox($elements) {
    echo '<form>';
    foreach ($elements as $option => $coche) {
        echo '<label>';
        echo '<input type="checkbox" name="metier"' . $option . '"';

        // Vérifiez si la case doit être précochée
        if ($coche) {
            echo ' checked';
        }

        echo '> ' . $option . '</label><br>';
    }
    echo '</form>';
}

$elements = array (
    "Développeur Logiciel" => false,
    "Designer web" => false,
    "Intégrateur" => false,
);

afficherInput($nomsInput);
afficherRadio($nomsRadio);
genererCheckbox($elements);
echo '<input type="submit" value="Envoyer le formulaire" />';
?>
