<?php

require __DIR__.'/vendor/autoload.php';

dump(__DIR__);

$emptyarray = [];

$fruits = ["ananas", "banane", "cerise"];

dump($fruits);

echo "fruit numéro 1 : {$fruits[0]}<br>\n";
echo "fruit numéro 2 : {$fruits[1]}<br>\n";
echo "fruit numéro 3 : {$fruits[2]}<br>\n";

$fruits[0] = 'abricot';

dump($fruits);

//la fonction permet de connaitre la taille du tableau
$size = count($fruits);

echo "Il y a {$size} fruits <br>\n";

//ajouts d'elements
$fruits[] = 'datte';
$fruits[] = 'fraise';

dump($fruits);

$size =count($fruits);
echo "Il y a {$size} fruits <br>\n";

//enlever un élément
$fruitsA = array_shift($fruits);

dump($fruits);
dump($fruitsA);

//enlever le dernier élément
$fruitF = array_pop($fruits);

dump($fruitF);
dump($fruits);

//enlever un element dans le tableau
$fruitsRemoved = array_splice($fruits,1, 1);

dump($fruitsRemoved);
dump($fruits);

//enlever un élément 
// warning la fonction unset ne réindex pas le tableau
// donc ne surtout pas utiliser avec les boucles for et un compteur 
// mais plus simple a utiliser que array_splice
unset($fruits[0]);

dump($fruits);

$vegetables = ['artichaut, betterave, carotte'];

//concaténation de 2 tableaux
$biglist = array_merge($fruits, $vegetables);

dump($biglist);

if (!in_array('ananas',$biglist)) {
echo "Il n'y a pas d'ananas dans la liste<br>\n";
}

if(in_array('carottes',$biglist)) {
    echo "Il ya des carottes dans la liste<br>\n";
}
