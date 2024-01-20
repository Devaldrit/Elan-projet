<?php
    require 'Film.php';
    require 'Genre.php';
    require 'Role.php';
    require 'Personne.php';
    require 'Acteur.php';
    require 'Realisateur.php';
    require 'Casting.php';

    //Création des objets
    $jean = new Realisateur("Jean", "Pierre", "Masculin", '1986-01-01');
    $horreur = new Genre("Horreur");
    $bertrand = new Acteur("Bertrand", "Jacque", "Masculin", "2000-01-29");
    $mechant = new Role("Le grand mechant loup");
    $film1 = new Film ("Avengers", "01-01-2000", 150, "Description du film", $jean, $horreur);
    $casting = new Casting($film1, $mechant, $bertrand);

    $louis = new Acteur("Louis", "Vignac", "Msculin", "2004-03-27");
    $gentil = new role("Gentil");
    $film2 = new Film ("Squid Game", "09-02-2008", 120, "Film flippant avec une histoire superbe", $jean, $horreur);
    $casting2 = new Casting($film2, $gentil, $louis);
?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1, h3 {
                color: #007bff;
                font-size: 35px;
        }

        p {
            margin: 0;
            line-height: 1.4;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            border: 1px solid #007bff;
        }

    </style>
</head>
<body>

<?php
    // Code PHP pour générer du contenu HTML

    $film1->listActeursFilm(); 
    echo "</br>";
    $jean->listRealisateurFilms();
    echo "</br>";
    $mechant->roleIncarnerActeurs();
    echo "</br>";
    $casting->castingFilm();
    $casting2->castingFilm();
    echo "</br>";
    $horreur->listFilmsGenre();
?>

</body>
</html>
