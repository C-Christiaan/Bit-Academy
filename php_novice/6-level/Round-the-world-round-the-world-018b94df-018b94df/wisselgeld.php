<?php

const EURO = [50, 20, 10, 5, 2, 1];
const CENT = [50, 20, 10, 5];

function invoer($bedrag)
{
    if (!is_numeric($bedrag) || $bedrag == 0) {
        exit("Geen wisselgeld" . PHP_EOL);
    }
}

function afronden($bedrag)
{
    return round($bedrag, 2, PHP_ROUND_HALF_EVEN);
}

function omrekenen($bedrag)
{
    $bedrag = afronden($bedrag);
    $euro = intval($bedrag);
    $cent = intval(round(($bedrag - $euro) * 100));

    foreach (EURO as $geldeenheid) {
        if ($euro >= $geldeenheid) {
            $aantalEuro = floor($euro / $geldeenheid);
            $euro %= $geldeenheid;
            echo "$aantalEuro x $geldeenheid euro" . PHP_EOL;
        }
    }

    foreach (CENT as $geldeenheid) {
        if ($cent >= $geldeenheid) {
            $aantalCent = floor($cent / $geldeenheid);
            $cent %= $geldeenheid;
            echo "$aantalCent x $geldeenheid cent" . PHP_EOL;
        }
    }
}

$bedrag = $argv[1];
invoer($bedrag);
omrekenen($bedrag);
?>