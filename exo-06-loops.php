<?php

/*
Afficher tous les éléments du tableau $fruits avec une boucle foreach.
Afficher le message "première itération" lors de la première itération et le message "dernière itération" lors de la dernière itération.
*/

$fruits = ['ananas', 'banane', 'cerise'];
$size = count($fruits);
$dernière = $size-1;

foreach($fruits as $key => $fruit){
    echo "$fruit <br>";

    if($key == 0)
        echo "premiere itération<br>";

    if($key == $dernière)
        echo "dernière itération";
}
