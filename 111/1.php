<?php


$start = 20;
$end = 45;
$sum = 0;

// Числа от 20 до 45
for ($i = $start; $i <= $end; $i++) {
    if (fmod($i, 5) == 0) {
        echo $i . '<br>';
    }
}

