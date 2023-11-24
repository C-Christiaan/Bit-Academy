<?php

echo 'Hoeveel landen ga je toevoegen?' . PHP_EOL;
$landen = readline();
$topo = [];

for ($i = 0; $i < $landen; $i++) {
    echo 'Welk land wil je toevoegen??' . PHP_EOL;
    $land = readline();
    echo "Wat is de hoofdstad van $land?" . PHP_EOL;
    $hoofdstad = readline();
    $topo[$land] = $hoofdstad . PHP_EOL;
}
echo "De volgende landen en steden zitten in de database:" . PHP_EOL;
foreach ($topo as $land => $hoofdstad) {
    echo "$land, $hoofdstad";
}
?>