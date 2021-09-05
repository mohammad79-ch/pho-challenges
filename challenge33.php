<?php

/** Create a function that takes two strings as arguments and returns the number of times the
 *
 * first string (the single character) is found in the second string.
 */

function charCount($myChar, $str) {

    $str = str_split($str);
    $arr= [];

    foreach ($str as  $item){
        if ($item == $myChar){
            $arr[]=$item;
        }
    }

    return count($arr);

}

// second methods

//function charCount($myChar, $str) {
//    return substr_count($str,$myChar);
//}

echo "<pre>";
die(var_dump(charCount("d","mamad")));