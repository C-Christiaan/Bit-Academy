<?php

if (count($argv) !== 2) {
    die("Geen wisselgeld");
}

$bedrag = intval($argv[1]);
if ($bedrag <= 0) {
    echo "Geen wisselgeld";
} else {
    $wisselgeld = $bedrag;

    $tien = floor($wisselgeld / 10);
    $wisselgeld %= 10;

    $vijf = floor($wisselgeld / 5);
    $wisselgeld %= 5;

    $twee = floor($wisselgeld / 2);
    $wisselgeld %= 2;

    $een = $wisselgeld;

    if ($tien > 0) {
        echo "$tien x 10 euro" . PHP_EOL;
    }

    if ($vijf > 0) {
        echo "$vijf x 5 euro" . PHP_EOL;
    }

    if ($twee > 0) {
        echo "$twee x 2 euro" . PHP_EOL;
    }

    if ($een > 0) {
        echo "$een x 1 euro" . PHP_EOL;
    }
}
