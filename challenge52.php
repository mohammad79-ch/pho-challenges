<?php

/** Create a function that takes a string and returns a string with its letters in alphabetical order.*/

function AlphabetSoup($str) {

    $arr = str_split($str);
    sort($arr);

    return implode('',$arr);
}

echo "<pre>";
die(var_dump(AlphabetSoup('javascript')));