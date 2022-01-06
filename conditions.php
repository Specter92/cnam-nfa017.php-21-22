<?php

//inclusion d'autoloading de php
require __DIR__.'/vendor/autoload.php';

$iswaterOff = (bool) random_int(0, 1);
$isgasOff = (bool) random_int(0, 1);

dump($iswaterOff);
dump($isgasOff);

if ($iswaterOff == true && $isgasOff == true) {
    echo 'on peut partir en weekend!<br>';
} else {
    echo 'on ne peut pas partir en we!<br>';

    if (!$iswaterOff) {
        echo 'il faut couper l\'eau<br>';
    } 
if (!$isgasOff) {
    echo 'il faut couper le gaz<br>';
}
}




$haspaymentCard = (bool) random_int(o, 1);
$hasCash = (bool) random_int(0, 1);

dump($haspaymentCard);
dump($hasCash); 

if (true || false) {
    echo "Vous pouvez partir faire les courses<br>\n";
} else {
    echo "Vous ne pouvez pas faire les courses<br>\n";
    echo "Il vous manque un moyen de paiement<br>\n";
}
$stock = random_int(0, 10);

dump($stock);

if($stock == 0) {
    echo "rupture de strock<br>\n";
} elseif ($stock == 1) {
    echo "il reste {$stock} pièce<br>\n";
} elseif ($stock <= 3) {
    echo "il reste {$stock} pieces<br>\n";
    } else {
        echo "Stock disponible<br>\n";
    }