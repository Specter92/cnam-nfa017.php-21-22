<?php

// affectation d'une chaine de caractère
$text1 = 'foo';

//concaténation d'une variable et d'une chaine de caractères
$text2 = $text1. 'bar';

echo $text1."<br>\n";
echo $text2."<br>\n";

$temperature = 10.5;
//Interpolation de la variable température
$report = "la température actuelle est {$temperature} C";

echo $report."<br>\n";
//replacementdu point par une virgule
echo str_replace('.',',', $report.'<br>\n');
