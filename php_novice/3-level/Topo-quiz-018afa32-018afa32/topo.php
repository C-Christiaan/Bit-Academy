<?php

$landenEnHoofdsteden = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "Londen"
];
$score = 0;

foreach ($landenEnHoofdsteden as $land => $hoofdstad) {
    echo "Wat is de hoofdstad van $land? " . PHP_EOL;
    $antwoord = readline();
    if ($antwoord == $hoofdstad) {
        echo ("Dit is correct") . PHP_EOL;
        $score++;
    } else {
        echo ("Helaas! $antwoord is niet de hoofdstad van $land. ") . PHP_EOL;
        echo ("Het correcte antwoord is: $hoofdstad") . PHP_EOL;
    }
}
echo "U heeft $score van de 10 goed" . PHP_EOL;
?>