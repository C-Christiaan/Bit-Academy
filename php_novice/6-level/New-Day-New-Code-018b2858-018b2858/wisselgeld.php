<?php

const MONEY_UNITS = [50, 20, 10, 5, 2, 1];
$bedrag = intval($argv[1]);
$restbedrag = $bedrag;

if (count($argv) !== 2) {
    exit("Geen wisselgeld" . PHP_EOL);
}

foreach (MONEY_UNITS as $geldeenheid) {
    if ($restbedrag >= $geldeenheid) {
        $aantalrestbedrag = floor($restbedrag / $geldeenheid);
        $restbedrag %= $geldeenheid;
        echo "$aantalrestbedrag x $geldeenheid euro" . PHP_EOL;
    }
}
