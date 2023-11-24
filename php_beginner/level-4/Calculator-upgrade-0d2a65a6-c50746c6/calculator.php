<?php

echo 'Welke operatie wil je uitvoeren? (+, -, %)' . PHP_EOL;
$a = readline();
if ($a != '+' && $a != '-' && $a != '%') {
    exit("'$a' is geen geldige operatie") . PHP_EOL;
}
echo "eerste getal?" . PHP_EOL;
$b = readline();
if (!is_numeric($b)) {
    exit("'$b' is geen getal"); 
}

echo "tweede getal?" . PHP_EOL;
$c = readline();
if (!is_numeric($c)) {
    exit("'$c' is geen getal"); 
}

$totaal1 = $b + $c;
$totaal2 = $b - $c;
$totaal3 = $b % $c;

if ($a == '+') {
    echo "Uw resultaat is: " . $totaal1 . PHP_EOL;
} elseif ($a == '-') {
    echo "Uw resultaat is: " . $totaal2 . PHP_EOL;
} elseif ($a == '%') {
    echo "Uw resultaat is: " . $totaal3 . PHP_EOL;
} else {
    exit("Geen geldige invoer") . PHP_EOL;
}

?>