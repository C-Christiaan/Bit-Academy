<?php

echo 'Welke operatie wil je uitvoeren? (+, -)' . PHP_EOL;
$c = readline();
  
echo "eerste getal?" . PHP_EOL;
$a = readline();

echo "tweede getal?" . PHP_EOL;
$b = readline();

if ($c == '+') {
    echo "Uw resultaat is: " . ($a + $b) . PHP_EOL;
} elseif ($c == '-') {
    echo "Uw resultaat is: " . ($a - $b) . PHP_EOL;
}
?>