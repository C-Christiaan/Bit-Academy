<?php

echo "Hoeveel vrienden zal ik vragen om hun droom? " . PHP_EOL;
$vrienden = readline();

if (is_numeric($vrienden)) {
    $bucketList = [];
    for ($i = 1; $i <= $vrienden; $i++) {
        echo "Wat is jouw naam? " . PHP_EOL;
        $naam = readline();
        echo "Hoeveel dromen ga je opgeven? " . PHP_EOL;
        $aantal = readline();
        
        $dromen = [];
        
        for ($j = 1; $j <= $aantal; $j++) {
            echo "Wat is jouw droom? " . PHP_EOL;
            $droom = readline();
            $dromen[] = $droom;
        }
        $bucketList[$naam] = $dromen;
    }

    foreach ($bucketList as $naam => $dromen) {
        foreach ($dromen as $droom) {
            echo "$naam heeft dit als droom: $droom" . PHP_EOL;
        }
    }
}

?>