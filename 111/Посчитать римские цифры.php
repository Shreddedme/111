<?php

function solution ($roman) {


    $roman = str_split($roman);
    $number = [     'I' =>    1,
        'V' =>    5,
        'X' =>    10,
        'L' =>    50,
        'C' =>    100,
        'D' =>    500,
        'M' =>    1000];
    $sum = 0;
    foreach ($roman as $key=>$value) {
        $nextValue = null;
        if (isset($roman[$key+1])) {
            $nextValue = $number[$roman[$key + 1]];
        }
        if ($nextValue > $number[$value] ) {
            $sum -= $number[$value];
        } else {
            $sum += $number[$value];
        }

    }

    return $sum;
}

$roman = 'IV';
echo solution($roman);