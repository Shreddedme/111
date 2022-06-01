<?php

//создать массив, наполнить его случайными значениями (можно использовать функцию rand),
// найти максимальное и минимальное значение массива и поменять их местами.

$arr = [];
for ($i=1; $i<10000; $i++){
    $r = rand(0,5);
    if (in_array($r, $arr)){
        continue;
    }
    $arr[]=$r;
    if (count($arr)>= 5)
        break;
}

print_r($arr);

$min=min($arr);
$max=max($arr);

$min1 = array_search(min($arr), $arr);
$max1 = array_search(max($arr), $arr);

$arr[$min1] = $max;
$arr[$max1] = $min;

print_r($arr);