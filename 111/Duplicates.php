<?php
function uniqueInOrder($arr){
    if (is_string($arr)) {
        $arr = trim($arr);
        if (strlen($arr)>0) {
            $arr = str_split($arr);
        } else {
            $arr = [];
        }
    }
    $a = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] !== ($arr[$i - 1] ?? null)) {

            $a[] = $arr[$i];
        }
    }
    return $a;
}



$arr = [1,1,2,3,4,4,5,6,7,7,8];
print_r(uniqueInOrder($arr));

