<?php

$a = readline('Van welk getal wil je de faculiteit weten?' . PHP_EOL);

$uitkomst = 1;

for ($b = 1; $b <= $a; $b++) {
    $uitkomst = $uitkomst * $b;
}

echo "De faculteit van " . $a . " is " . $uitkomst . PHP_EOL;

?>