<?php
function find_even_index2($arr) {
    foreach ($arr as $k=>$v) {
        $leftArray = array_slice($arr, 0, $k);
        $rightArray = array_slice($arr,$k + 1);
        $leftSum = array_sum($leftArray);
        $rightSum = array_sum($rightArray);
        if ($leftSum == $rightSum) {
            return $k;
        }
    }
    return -1;
}

$arr = [1,2,3,4,3,2,1];
echo  find_even_index2($arr);
