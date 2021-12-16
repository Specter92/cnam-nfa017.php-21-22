<?php

require __DIR__.'/vendor/autoload.php';

1 == '1';
// var_dump() sert a inspecter une valeur
// var_dump() ne doit pas servir a afficher une valeur à l'utilisateur

dump(1 == '1');


$text = 'foo bar baz';
dump($text);

$number1 = 123;
dump($number1);

$number2 = 3.14;
dump($number2);

