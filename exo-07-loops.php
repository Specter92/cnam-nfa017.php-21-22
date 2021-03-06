<?php

/*
Créez toutes les cartes de l'as jusqu'au roi de cœur en utilisant une boucle for.
Le résultat doit être un tableau contenant les éléments suivants : ['1 cœur', '2 cœur', ..., '13 cœur']
Rappel des valeurs de certaines cartes :
- as : 1
- valet : 11
- dame : 12
- roi : 13
Ensuite, utilisez une boucle foreach pour afficher tous les éléments du tableau.
*/
$cartes = [];

for($i = 1; $i <= 13; $i ++){
    $cartes[] = "$i coeur";
}

echo '<br>';

foreach($cartes as $carte){
    echo $carte . '<br>';
}
/*
Bonus
Si vous voulez afficher correctement le nom des cartes, vous pouvez utiliser la fonction preg_replace().
Exemple qui remplace 1 par as
1 carreau sera remplacé par "as carreau"
mais 11 carreau ne sera pas remplacé
et 9 treffle ne sera pas remplacé non plus
*/
$cardName = preg_replace('/^1 /', 'as', '1 carreau');
$cardName = preg_replace('/^1 /', 'as', '11 carreau');
$cardName = preg_replace('/^1 /', 'as', '9 treffle');






