<?php 
$marques = ["Peugeot", "reunault", "BMW", "Mercedes"];
$nbMarques = count($marques);

echo " il y a $nbMarques marques de voitures dans le tableau :"."<br>";
echo "<ul>";
foreach ($marques as $marque) {
    echo "<li>$marque</li>";
}
echo "</ul>";