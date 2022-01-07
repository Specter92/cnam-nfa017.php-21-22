<?php

require __DIR__.'/vendor/autoload.php';



// créer un tableau contenant 5 cartes d'un jeu de 32 cartes à jouer.
//Exemple de nom de cartes : 'As de pique', '3carreaux', 'valet de treffle', etc..
$cartes = ["As de treffle", "2 de carreau", "valet de pique", "5 de coeur", "valet de treffle"];
dump($cartes);

// Tirez un nombre "n" au hasard, compris entre 1 et 5 inclus.
$tirerCarte = random_int(1, 5);
dump($tirerCarte);

// A l'aide de ce nombre, retirer la n-ieme carte de la main.
$eniemeCarte = array_splice($cartes, $tirerCarte-1, 1);
dump($eniemeCarte);
dump($tirerCarte);

// Afficher le nom de la carte qui a été retirée.
echo "la carte {$eniemeCarte[0]} a été retiré <br>\n";

dump($cartes);



