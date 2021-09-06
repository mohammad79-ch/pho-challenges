<?php

/** Create a function that replaces all the vowels in a string with a specified character. */

function replaceVowels($str, $ch) {

    $arr = ["o",'i','e','a','u'];
    $result = '';

    foreach (str_split($str) as $item){
        if (in_array($item,$arr)){
        $item = $ch;
        }

        $result.=$item;
    }

    return $result;
}



echo "<pre>";
die(var_dump(replaceVowels("the aardvark", "#")));
