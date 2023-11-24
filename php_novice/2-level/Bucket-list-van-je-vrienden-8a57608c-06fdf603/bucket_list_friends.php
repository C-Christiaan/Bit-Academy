<?php

echo 'Hoeveel vrienden zal ik vragen naar hun droom?' . PHP_EOL;
$AantalVrienden = readline();
if (is_numeric($AantalVrienden)) {
    $bucketlist = [];
    for ($i = 1; $i <= $AantalVrienden; $i++) {
        echo "Wat is jouw naam? " . PHP_EOL;
        $naam = readline();
        echo "Wat is jouw droom?" . PHP_EOL;
        $droom = readline();
        $bucketlist[$naam] = $droom;
    }

    foreach ($bucketlist as $naam => $droom) {
        echo "$naam heeft dit als droom: $droom" . PHP_EOL;
    }
} else {
    exit("'$AantalVrienden' is geen getal, probeer het opnieuw") . PHP_EOL;
}
