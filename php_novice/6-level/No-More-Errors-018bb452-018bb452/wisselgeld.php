<?php

const EURO = [50, 20, 10, 5, 2, 1];
const CENT = [50, 20, 10, 5];

function invoer($bedrag)
{
    try {
        if (!isset($bedrag)) {
            throw new Exception("Geen bedrag meegegeven");
        }
        if (!is_numeric($bedrag)) {
            throw new Exception("Geen wisselgeld");
        }
        if ($bedrag < 0) {
            throw new Exception("Negatief bedrag meegegeven");
        }
        if ($bedrag == 0) {
            throw new Exception("Geen wisselgeld");
        }
    } catch (Exception $e) {
        exit($e->getMessage());
    }
}

function afronden($bedrag)
{
    return round($bedrag * 20) / 20;
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
if (count($argv) < 2) {
    exit("Geen bedrag meegegeven");
}

$bedragInput = $argv[1];
invoer($bedragInput);
omrekenen($bedragInput);
