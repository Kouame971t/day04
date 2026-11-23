<?php
// $students = ["Alice" => 14, "Bob" => 9, "Eva" => 18]; // variable de test : ne pas rendre
foreach ($students as $name => $grade) {
    if ($grade >= 10) {
        echo $name . "\n";
    }
}
