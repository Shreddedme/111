<?php
    function solution($str) {

        if(empty($str)) {
        return [];
    }
        if (strlen($str) % 2 !== 0) {
        $str .= '_';
    }

        $str = str_split($str, 2);
        return $str;
}