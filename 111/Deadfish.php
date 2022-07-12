<?php
function parse($data){
    $data = str_split($data);
    $arr = [];
    $digit = 0;
    foreach ($data as $key => $elem) {
        if
        ($elem == 'i'){
            $digit++;
        } elseif
        ($elem == 'd'){
            $digit--;
        } elseif
        ($elem == 's'){
            $digit = pow($digit, 2);
        } elseif
        ($elem == 'o'){
            $arr [] = $digit;
        }
    }
    return $arr;
}

$data = 'iiisdoso';
print_r( parse($data));