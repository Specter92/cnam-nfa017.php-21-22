<?php


require __DIR__.'/vendor/autoload.php';



//Creéz un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.
//Exemple de nom de cartes : '1 pique', '3 carreau', '11 treffle', etc.
//Rappel des valeurs de certaines cartes :
//- as : 1
//- valet : 11
//- dame : 12
//- roi : 13 

$tableaudeCarte = ["1 As de pique", "3 de carreau", "11 treffle", "1 As de treffle", "12 dame de treffle"];
dump($tableaudeCarte);


//Stockez la taille du tableau dans une variable.

$size = count($tableaudeCarte);
dump($size);

//Tirez deux nombres au hasard, compris entre 1 et la taille du tableau inclus, en utilisant la fonction random_int().
//Stockez ces nombres dans un tableau.
$tirageCartes = [];

$tirageCartes[] = random_int(1, $size);
dump($tirageCartes);

$tirageCartes[] = random_int(1, $size -1);
dump($tirageCartes);

//À l'aide de ces nombres, retirer deux cartes de la main.
$retirecarte = array_splice($tableaudeCarte, $tirageCartes[0]-1, 1);
$retireautrecarte = array_splice($tableaudeCarte,$tirageCartes[1]-1,1);
dump($tableaudeCarte);

//Affichez les nombres tirés au hasard et le nom des cartes qui ont été retirées.
$retirecarte = $retirecarte[0];
$retireautrecarte = $retireautrecarte[0];

dump($retireautrecarte);
dump($retirecarte);

//Comparez les valeurs numériques des cartes retiré et affichez quelle carte a une valeur supérieur ou s'il y a égalité.
//Attention, par convention la carte "as" (valeur 1) est la plus élevée.

if ($retirecarte == $retireautrecarte) {
    echo "la carte $retirecarte et $retireautrecarte sont pareil";
} elseif ($retirecarte > $retireautrecarte || $retirecarte == 1) {
    echo "La carte $retirecarte est supérieur à la carte $retireautrecarte";
} elseif ($retireautrecarte < $retirecarte || $retireautrecarte == 1){
    echo "la carte $retirecarte est supérieur à la carte $retireautrecarte";
}






