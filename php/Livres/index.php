<?php
    //connection des differents fichiers entre eux
    require_once 'Auteur.php';
    require_once 'Livre.php';


    //creation de l'objet titre representant la biographie 
    
    //titre principale (nom de l'ateur)
    $auteur = new Auteur("Stephen", "King");


    //Differents livres de l'auteur

    //creation des differents objets pour afficher les livres de l'auteur en question
    $l1 = new Livre('CA', "01-01-1986", 1138, 19.50, $auteur);
  
    $l2 = new Livre("Simetierre", "01-01-1983", 374, 19.99, $auteur);
   
    $l3 = new Livre("Le Fléau", "01-01-1978", 823,9.89, $auteur);

    $l4 = new Livre("Shining", "01-01-1977", 447, 16, $auteur);


    //appelle de la fonctin pour afficher 
    echo $auteur->toStringAuteur();
    $auteur->bibliographie();
?>
