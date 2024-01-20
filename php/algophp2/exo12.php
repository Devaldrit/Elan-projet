<?php
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

foreach ( $tableauValeurs as $variable) {
    echo var_dump($variable)."<br>";
}
