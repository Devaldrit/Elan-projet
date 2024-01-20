<?php 
$num = 1;
$numPrint = $num;
 echo "Tableau de $numPrint :"."<br>";
if ($num <= 10) {
    for ($i = 1; $i<= 10; $i++) {
        $mul = $num * $i;
        echo "$num "."x "."$i "."= "."$mul"."<br>";
    }
}