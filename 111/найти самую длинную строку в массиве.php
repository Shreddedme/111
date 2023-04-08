<?php

$arr = ['i', 'dont', 'seven1', 'two', 'seven3', 'seven32','seven2'];
$str = '';
$newArr = [];

foreach ($arr as $key => $elem) {
    if (strlen($str) < strlen($elem)) {
        $newArr = [];
        $str = $elem;
        $newArr[] = $str;
    }
    elseif (strlen($str) === strlen($elem)) {
        $str = $elem;
        $newArr[] = $str;
    }
}
