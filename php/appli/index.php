<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ajouter produit</title>
</head>
<body>
    <a href="recap.php" class="lien-recap">Recapitulatif</a>
    <div id="#container">
        <h1>Ajouter un produit</h1>
        <!-- le action indique le fichier à atteindre lorsque l'utilisateur soumettra le formulaire -->
        <!-- le method  précise par quelle méthode HTTP les données du formulaire seront transmises au serveur -->
        <form action="traitement.php?action=add" method="post">
            <p>
                <label>
                    nom du produit :
                    <input type="text" name="name">
                </label>
            </p>
            <p>
                <label>
                    prix du produit :
                    <input type="number" step="any" name="price" min="0">
                </label>
            </p>
            <p>
                <label>
                    Quantité désirée :
                    <input type="number" name="qtt" value="1" min="0">
                </label>
            </p>
            <p>
                <input type="submit" name="submit" value="ajouter au panier">
            </p>
        </form>
    </div>
</body>
</html>