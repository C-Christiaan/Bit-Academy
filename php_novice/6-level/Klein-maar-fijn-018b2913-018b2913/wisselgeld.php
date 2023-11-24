<?php

const EENHEDEN_EURO = [50, 20, 10, 5, 2, 1];
const EENHEDEN_CENT = [50, 20, 10, 5];
$i = 0;
$wisselgeld = round(floatval($argv[1]), 2);
$euro = intval($wisselgeld);
$cent = intval(round(($wisselgeld - $euro) * 100));

if ($wisselgeld == 0) {
    echo "geen wisselgeld" . PHP_EOL;
} else {
    foreach (EENHEDEN_EURO as $eenheid) {
        if ($euro >= $eenheid) {
            $i = floor($euro / $eenheid);
            $euro -= ($i * $eenheid);
            echo $i . " x " . $eenheid . " euro " . PHP_EOL;
        }
    }
    foreach (EENHEDEN_CENT as $eenheid) {
        if ($cent >= $eenheid) {
            $i = floor($cent / $eenheid);
            $cent -= ($i * $eenheid);
            echo $i . " x " . $eenheid . " cent " . PHP_EOL;
        }
    }
}
?>