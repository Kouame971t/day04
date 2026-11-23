<?php
// $days = [...]; // variable de test : ne pas rendre
foreach ($days as $day => $subjects) {
    echo $day . " : ";
    $last = count($subjects) - 1;
    foreach ($subjects as $index => $subject) {
        echo $subject;
        if ($index < $last) {
            echo ", ";
        }
    }
    echo ".\n";
}
