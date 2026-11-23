<?php
// $numList = [3, 6, 9, 12, 15]; // variable de test : ne pas rendre
foreach ($numList as $value) {
    if ($value % 4 === 0) {
        echo $value . "\n";
        break;
    }
}
