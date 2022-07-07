<?php

function comp($a1, $a2) {
    if(!isset($a1) or !isset($a2)) {
        return false;
    }

        $sq = array_map('sqrt', $a2);
        sort($a1);
        sort($sq);
    if ($a1 == $sq) {
        return true;
    }
    else {
    return false;
    }
}

$a1 = [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [121, 14641, 20736, 361, 25921, 361, 20736, 361];