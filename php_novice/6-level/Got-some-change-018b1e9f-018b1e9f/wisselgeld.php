<?php

if (count($argv) !== 2) {
    exit("Geen wisselgeld");
}

$bedrag = intval($argv[1]);
if ($bedrag <= 0) {
    echo "Geen wisselgeld";
} else {
    echo "$bedrag x 1 euro" . PHP_EOL;
}
