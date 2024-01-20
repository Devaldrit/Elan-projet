<h1> introduction php</h1>


<?php

/* commentaires
sur plusieurs 
lignes */ 


// DECLRARATIO DES VARIABLES
$chaineDeCaracteres = "mon texte"; //string
$chaineDeCaracteres2 = "mon prix est très intéressant"; //string
$chaineDeCaracteres3 = "mon prix est de"; //string
$entier = 50; //integer
$flottant = 9.99; //float
$booleen = true; //booleen true ou false
$tableau1 = array("texte1", "texte2"); //Autre façon de déclarer un tableau explécitement array.
$tableau2 = ["texte 1", "texte 2"]; //façon courante de déclaraer un tableau, on peut y stocker array ou integer
$date = new DateTime(); // programmation orientée objet (POO)

//AFFICHAGE
echo "test <br>";
echo $chaineDeCaracteres."<br>"; // mon texte
echo $chaineDeCaracteres3." ".$entier." euro <br>"; // on affiche "mon prix est de 50", on a fiat ici de la concatenation, le point permet cette concatenation au contraire du javascript ou il fait un +
echo "$chaineDeCaracteres3 $entier euros <br>"; //on peut aussi faire de la concatenation de cette manière, cela évite de s'êmbeter a mettre des points partout.

//FONCTIONS CHAINES DE CARACTERES

// compter le nombre de caractères (espace inclus !!)
$nbCaracteres = strlen($chaineDeCaracteres); //les espaces sont comptabilisé comme caractère par la fonction strlen
echo "il y a $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres3)."caractères<br>";

//Convertir une chaîne en majuscule
$chaineMajuscules = strtoupper($chaineDeCaracteres);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>"; //prend en compte les caractères accentués 

//Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres2);
echo "la phrase contient $nbMots mots<br>";


// FONCTIONS TABLEAUX

// Compter le nombre d'élements présents dans un tableau 
$tailleTableau1 = count($tableau1);
echo "Le tableau contient $tailleTableau1 élements<br>";

// Accéder à la première valeur du tableau  (attention au 1er élement à l'indice  0 !)
echo $tableau1[0]."<br>"; 

$notes = [12, 14, 9, 8, 19, 15.52];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);
echo "La moyenne est de $moyenne <br>";

//OPERATIONS MATHEMATIQUES

$nbArticles = 5;
$prixHT = 10.99;
$totatlHT =  $nbArticles * $prixHT;
echo "Le totale HT est de $totatlHT euros<br>";

//Afficher le total TTC d'une facture
$tauxTVA = 0.20;

$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
echo "le totale ttc est de $totalTTC euros<br>";


//Renvoie le type de la variable spécifiée en paramètre
$typeVariable = "texte";
echo gettype($typeVariable)."<br>";

// STRUCTURES DE CôNTROLE
 
// Conditions (IF = SI)

$prenom = "georges";
$age = 1;

if($age < 18){
    $resultat = "mineur";
} else {
    $resultat = "majeur";
}

echo "$prenom est $resultat<br>";

// Ternaire 

$result = $age >= 18 ? "majeur" : "mineur"; 
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

// En fonction de l'âge, afficher une catégorie 
/*
    si la personne a plus de 30 --> SENIOR
    si la personne a plus de 20 --> CADET
    sinon junior
*/
if(gettype($age) == "integer" || gettype($age) == "double"){
    if($age >=30) {
        $resultat = "Senior";
    } else if ($age >= 20){
        $resultat = "Cadet";
    } else {
        $resultat = "Junior";
    }
    
    echo "la personne qui à $age ans est : $resultat<br>";
} else {
    echo "veuillez saisir un âge numérique !<br>";
}

/*
    Si la valeur est 1 --> OK !
    Si la valeur est 0 --> KO !
    sinon afficher "valeur non gérée"
*/
$valeur = 88;
switch($valeur) {
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée !<br>";
}

$age = 34;
switch(true) {
    case $age >= 30: echo "Senior<br>"; break;
    case $age >=20: echo "Cadet<br>"; break;
    default: echo "Junior<br>";
}

//BOUCLES (loop)
//afficher les chiffres de 1  à 10 

//FOR (pour)
// i++ --> $i = $i + 1

for($i = 1; $i <= 10; $i++){
    echo $i." ";
}
echo "<br>";

//WHILE (tant que)
$i = 1;    //pour while on déclare toujours la variable a l'extérieur 
while($i <= 10){    //la condition d'ârret se trouve dans les paranthèses
    echo $i." ";
    $i++;   //on incrémente a l'intérieur de la boucle
}
echo "<br>";

//  FOREACH
foreach (range(1,10) as $valeur) {
    echo $valeur." ";
}

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);


echo "<h3>Méthode for</h3>";
for($i = 0; $i< $nbMarques ; $i++) {
    echo $marques[$i]."<br>";
}

echo "<h3>Méthode While</h3>";
$i = 0;
while($i < $nbMarques){
    echo $marques[$i]."<br>";
    $i++;
}
echo "<h3>Méthode foreach</h3>";
foreach ($marques as $marque){
    echo $marque."<br>";
}


// TABLEAUX ASSOCIATIFS
// clé (key)-> valeur (value) (clé doit être unique)


$formateurs = [
    "Aldrit" => "Mulhouse",
    "Bertrand" => "Paris",
    "ciril" => "Strasbourg"
];
echo "<br>";
var_dump($formateurs)."<br>";

ksort($formateurs); 
//  Ksort() tri le tableau de A à  Z (car k = key)
//  krsort() tri le tableau de Z à A (inversement du coup car r = reverse)
// asort => trier sur la valeur (A à Z)
// arsort => trier sur la valeur (Z à A)asort($formateurs);
foreach($formateurs as $prenom => $ville) {
    echo ucfirst($prenom)." se situe à ".mb_strtoupper($ville)."<br>";
}

$clients = [
    "stephane" => [
        "adresse" => "10 rue de la gare",
        "cp" =>  "67000",
        "ville" => "STRASBOURG",
        "tel" => "0988776655"
    ],
    
    "virgile" => [
        "adresse" => "1 rue Principale",
        "cp" =>  "68100",
        "ville" => "Mulhouse",
        "tel" => "0711223310"
    ],
];

var_dump($clients);
echo $clients["virgile"]["ville"]." ".$clients["virgile"]["cp"];

foreach($clients as $prenom => $coordonnees) {
    echo ucfirst($prenom)." habite à ".
    $coordonnees["adresse"]." ".$coordonnees["cp"]." ".$coordonnees["ville"]."<br>";
}

// FONCTIONS
function afficherMessage () :string {
    $message = "salut"; 
    return $message;
}

echo afficherMessage()."<br>";

function affichernumero () :int {
    $numero = 5; 
    return $numero;
}

echo affichernumero();

function calculerCarre($nombre) {
    
}