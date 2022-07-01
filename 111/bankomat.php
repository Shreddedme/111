<?php

$money=18300;

$bills = [ 5000=>10, 500=>5, 100=>20];
$sum = 0;

if ($money < 100) {
    echo 'Выдача невозможна: Минимальная сумма 100';
}

foreach ($bills as $key=>$elem) {
    $sum += ($key * $elem);
    if ($money > $sum) {
        echo 'Выдача невозможна: Не хватает средст в банкомате';
    }
}

$checkoutSum = 0;


foreach ($bills as $key => &$value) {
    while (true) {
        if ($value < 1) {
            break;
        }
        if ($key <= ($money - $checkoutSum)) {
            $checkoutSum += $key;
            $value--;
            echo "checkout: $key\n";
        }
        if ($key > ($money - $checkoutSum)) {
            break;
        }
    }
}

echo $checkoutSum;
var_dump($bills);