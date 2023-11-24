<?php

$tijd = $argv[1];
$eenheid = substr($tijd, -1);
$getal = (int)substr($tijd, 0, -1);
$seconden = 0;

switch ($eenheid) {
    case 'd':
        $seconden = $getal * 24 * 60 * 60;
        break;
    case 'u':
        $seconden = $getal * 60 * 60;
        break;
    case 'm':
        $seconden = $getal * 60;
        break;
    case 's':
        $seconden = $getal;
}
echo "$seconden seconden";
?>