<?php

$album = [
    "Citizen of Glass" => 4.50,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10
];

$totaal = 0;
$aantalPrijzen = count($album);

foreach ($album as $albumNaam => $prijs) {
    $totaal += $prijs;
    echo "$albumNaam kost €$prijs" . PHP_EOL;
}

$gemiddelde = $totaal / $aantalPrijzen;

echo "Het totaalbedrag van alle albums is €" . $totaal . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €" . $gemiddelde . PHP_EOL;
?>
