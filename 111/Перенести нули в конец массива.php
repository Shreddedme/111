<?php
function moveZeros(array $items): array
{
    $arr1 = [];
    foreach ($items as $key=>$value) {
        if ((is_int($value) or is_float($value)) and $value == 0){
            $arr1[] = $value;
            unset($items[$key]);
        }
    }

    return array_merge($items,$arr1);

}

$items = [9,0.0,false,0,9,1,2,0,1,0,1,0.0,3,0,1,9,0,0,0,0,9];
print_r(moveZeros($items));
