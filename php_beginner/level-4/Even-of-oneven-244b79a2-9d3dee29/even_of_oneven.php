<?php

echo 'Vul een getal in' . PHP_EOL;
$a = readline();

if ($a % 2 == 0) {
    echo "Dit is een even getal";
} else {
    echo "Dit is een oneven getal";
}

?>