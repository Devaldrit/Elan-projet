<?php

function isPalindrome($input) {
    $stringRepresentation = strval($input);
    $cleanedString = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $stringRepresentation));
    $reversedString = strrev($cleanedString);
    return $cleanedString === $reversedString;
}

// Test case
$input = "Engage le jeu que je le gagne";

// Check if it's a palindrome
$isPalindrome = isPalindrome($input);

if ($isPalindrome) {
    echo "La phrase « $input » est un palindrome." . PHP_EOL;
} else {
    echo "La phrase « $input » n'est pas un palindrome." . PHP_EOL;
}

?>
