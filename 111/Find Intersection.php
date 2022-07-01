<?php
// array("1, 3, 4, 7, 13", "1, 2, 4, 13, 15") ввод
// 1,4,13 вывод
function FindIntersection($strArr) {
    $a1 = $strArr[0];
    $a2 = $strArr[1];
    $resString = '';

    $arr1 = explode(", ", $a1);
    $arr2 = explode(", ", $a2);

    foreach ($arr1 as $elem1) {
        foreach ($arr2 as $elem2) {
            if($elem1 === $elem2) {
                if($resString != '') {
                    $resString .=',';
                }
                $resString .= $elem1;
            }

        }

    }
    return $resString;

}




// keep this function call here
echo FindIntersection(fgets(fopen('php://stdin', 'r')));

