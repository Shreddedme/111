<?php
function encryptThis($text): string
{
    $arr = explode(' ', $text);
    $result = [];

    foreach($arr as $elem) {
        if(strlen($elem) == 1 ) {
            $str = ord($elem[0]);
        } elseif (strlen($elem) == 2) {
            $str = ord($elem[0]) . $elem[1];
        } else {
            $str = ord($elem[0]) . $elem[strlen($elem)-1] . substr($elem, 2, -1) . $elem[1];
        }
        $result[] = $str;
    }

    return implode('  ', $result);
}

$text = 'A wise old owl lived in an oak';
echo encryptThis($text);