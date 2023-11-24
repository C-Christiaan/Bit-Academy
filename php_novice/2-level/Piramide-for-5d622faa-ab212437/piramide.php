<?php

$stapels = readline('Hoeveel stapels wil je hebben? ');

for ($ster = 1; $ster <= $stapels; $ster++) {
    for ($aantal = 1; $aantal <= $ster; $aantal++) {
          echo "*";  
    }
    echo PHP_EOL;
}
    
?>