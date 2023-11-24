<?php

$totaal_seconden = 0;

for ($i = 1; $i < $argc; $i++) {
    $tijd = $argv[$i];
    $eenheid = substr($tijd, -1);
    $getal = (int)substr($tijd, 0, -1);

    switch ($eenheid) {
        case 'd':
            $totaal_seconden += $getal * 24 * 60 * 60;
            break;
        case 'u':
            $totaal_seconden += $getal * 60 * 60;
            break;
        case 'm':
            $totaal_seconden += $getal * 60;
            break;
        case 's':
            $totaal_seconden += $getal;
    }
}

if ($totaal_seconden > 0) {
    echo "De totale tijdsduur is $totaal_seconden seconden.";
} elseif ($argc > 1) {
    echo "De totale tijdsduur is 0 seconden.";
} else {
    echo "Geen tijd opgegeven.";
}
?>