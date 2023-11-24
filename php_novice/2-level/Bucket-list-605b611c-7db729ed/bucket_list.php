<?php

echo 'Hoeveel activiteiten wil je toevoegen?' . PHP_EOL;
$a = readline();
if (!is_numeric($a)) {
    exit("'$a' is geen getal, probeer het opnieuw") . PHP_EOL;
}
  $bucketlist = [];
for ($i = 1; $i <= $a; $i++) {
    echo "Wat wil je toevoegen aan jouw bucketlist? " . PHP_EOL;
    $activity = readline();
    $bucketlist[] = $activity;
}
  echo "Op jouw bucketlist staat: " . PHP_EOL;
foreach ($bucketlist as $activity) {
    echo $activity . PHP_EOL;
}
?>