<?php

$stapels = readline('Hoeveel stapels wil je hebben? ');
$ster = 1;
$sterren = '';

while ($ster <= $stapels) {
    $sterren .= str_repeat('*', $ster) . PHP_EOL;
    $ster++;
}

echo $sterren;
?>
 