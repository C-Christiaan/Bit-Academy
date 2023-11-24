<?php

$list = array();
echo "Wat wil je aan je boodschappenlijst toevoegen? " . PHP_EOL;
$product = readline();
array_push($list, $product);

function boodschap($list)
{
    echo "Je boodschappen lijstje bevat nu: " . PHP_EOL;
    foreach ($list as $value) {
        echo $value . PHP_EOL;
    }
}
boodschap($list);
// Deze echo moet in het midden blijven staan
echo "Bedankt voor het gebruik van de boodschappenlijst!" . PHP_EOL;

while (strtolower(substr(trim(readline("Wil je meer producten toevoegen? (y/n)")), 0, 1)) === 'y') {
    echo "Wat wil je aan je boodschappenlijst toevoegen?" . PHP_EOL;
    $product = readline();
    array_push($list, $product);
    boodschap($list);
}
