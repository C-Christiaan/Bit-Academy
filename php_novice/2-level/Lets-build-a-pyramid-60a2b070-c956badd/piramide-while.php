<?php

$stapels = readline('Hoeveel stapels wil je hebben? ');
$ster = 1;

while ($ster <= $stapels) {
    $aantal = 1;
    while ($aantal <= $ster) {
        echo "*";
        $aantal++;
    }
    echo PHP_EOL;
    $ster++;
}
?>