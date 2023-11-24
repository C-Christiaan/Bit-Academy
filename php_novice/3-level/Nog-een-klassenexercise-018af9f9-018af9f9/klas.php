<?php

echo "Wie zit er in de klas? " . PHP_EOL;
$klas = readline();

echo "De studenten in de klas zijn:" . PHP_EOL;

foreach (explode(" ", $klas) as $naam) {
    echo "$naam" . PHP_EOL;
}

?>