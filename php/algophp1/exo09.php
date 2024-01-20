<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php
// Définissez les variables pour éviter des erreurs si elles ne sont pas initialisées
$age = $sexe = "";

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère la valeur de l'input "age"
    $age = $_POST["age"];

    // Récupère la valeur de la liste déroulante "sexe"
    $sexe = $_POST["sexe"];

    // Vérifie si l'âge est valide
    if (is_numeric($age)) {
        // Gérez l'âge et le sexe dans une condition
        if (($sexe == "femme" && $age >= 18 && $age <= 35) || ($sexe == "homme" && $age > 20)) {
            echo "La personne est imposable.";
        } else {
            echo "La personne est non imposable.";
        }
    } else {
        echo "Veuillez entrer un nombre valide pour l'âge.";
    }
}
?>

<form method="post" action="">
    <label for="age">Entrez votre âge :</label>
    <input type="text" name="age" id="age" value="<?php echo $age; ?>">

    <label for="sexe">Sélectionnez votre sexe :</label>
    <select name="sexe" id="sexe">
        <option value="homme" <?php echo ($sexe == 'homme') ? 'selected' : ''; ?>>Homme</option>
        <option value="femme" <?php echo ($sexe == 'femme') ? 'selected' : ''; ?>>Femme</option>
    </select>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
