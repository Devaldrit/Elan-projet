<?php
function salutation () {
    $tableau = [
            "Mickael" =>[
                "langue" => "Salut",
            ],
            "Virgile" => [
                "langue" => "Hola",
            ],
            "Marie-Claire" => [
                "langue" => "Hello",
            ],
        ];
    ksort($tableau);
    foreach($tableau as $prenom => $bonjour) {
        echo $bonjour["langue"]." ".$prenom."<br>";
    }
}

echo salutation();