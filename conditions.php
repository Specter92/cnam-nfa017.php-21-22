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

