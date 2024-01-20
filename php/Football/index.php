<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <title>Football App</title>
         
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
         
        <link rel="stylesheet" href="./css/main.css">
     </head>
     
     <body>
     
<?php
    require 'Equipe.php';
    require 'Joueur.php';
    require 'Pays.php';
    require 'Contrat.php';

    // Équipe de France
    $france = new Pays("France");
    $psg = new Equipe("Paris Saint Germain", "10-02-1968", $france);
    $messi = new Joueur("Lionel", "Messi", "26-03-2003", $france);
    $lien = new Contrat("27-05-2010", "01-01-2020", 400000, $psg, $messi);

    // Équipe du Portugal
    $portugal = new Pays("Portugal");
    $porto = new Equipe("FC Porto", "15-03-1924", $portugal);
    $ronaldo = new Joueur("Cristiano", "Ronaldo", "05-02-2002", $portugal);
    $lienPorto = new Contrat("27-05-2045", "01-01-2080", 350000, $porto, $ronaldo);

    // Équipe de l'Espagne
    $espagne = new Pays("Espagne");
    $barcelona = new Equipe("FC Barcelona", "20-04-1899", $espagne);
    $iniesta = new Joueur("Andrés", "Iniesta", "15-08-1984", $espagne);
    $lienBarcelona = new Contrat("27-05-2045", "01-01-2080", 300000, $barcelona, $iniesta);

    // variables utiles
    $listePays = [$france, $portugal, $espagne];

    
    //Affichage red box (Affichage des équipes du pays)
    echo '<h1 class="display-1">Football App</h1>';
    echo '<div class="container mt-3">';
    echo "<div class='redboxes'>";
        echo '<div class="sous-titre">';
            echo '<h2 class="display-5 link-body-emphasis mb-1">Equipes du pays</h2>';
        echo '</div>';
        echo '<div class="appelle-methode">';
            // $france->listerEquipesPays();
            // $portugal->listerEquipesPays();
            // $espagne->listerEquipesPays();
            foreach ($listePays as $pays) {
                $pays->listerEquipesPays();
            }
        echo '</div>';
    echo "</div>";
    
    //Affichage blue box (Affichage des joueurs d'une équipe)
    echo "<div class='blueboxes'>";
        echo '<div class="sous-titre">';
            echo '<h2 class="display-5 link-body-emphasis mb-1">Joueurs dune equipe</h2>';
        echo '</div>';
        echo '<div class="appelle-methode">';
            $psg->listerJoueursEquipe();
            $porto->listerJoueursEquipe();
            $barcelona->listerJoueursEquipe();
        echo '</div>';
    echo '</div>';
    
    //Affichage green box (Affichage des équipes d'un joueur)
    echo "<div class='greenboxes'>";
        echo '<div class="sous-titre">';
            echo '<h2 class="display-5 link-body-emphasis mb-1">Equipes dun joueur</h2>';
        echo '</div>';
        echo '<div class="appelle-methode">';
            $messi->ListerEquipesDuJoueur();
            $ronaldo->ListerEquipesDuJoueur();
            $iniesta->ListerEquipesDuJoueur();
        
    echo "</div>";
    

    
    // Affichage du salaire mensuel pour Messi
    $nombreMoisMessi = $lien->calculerNombreMois();
    $salaireMensuelMessi = $lien->calculerSalaireMensuel();

    // echo "Nombre de mois entre les dates de début et de fin de saison pour Messi : " . $nombreMoisMessi . "<br>";
    
            echo "<h3 class='salaire'> Salaire mensuel pour Messi : " . '</br>' . $salaireMensuelMessi . ' euros' . "<br>" . '</h3>';
        echo '</div>';
    echo '</div>'
    

    
?>

    
   
    </body>
</html>
