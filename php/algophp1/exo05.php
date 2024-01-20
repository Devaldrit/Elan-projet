<?php
$valueCH = 100.30;
$tauxConversion = 0.15;
$valueConverted = $valueCH * $tauxConversion;
echo "Montant en francs : ".$valueCH."<br>";
echo $valueCH." francs = ".number_format($valueConverted, 2, ',', ' ')." €";