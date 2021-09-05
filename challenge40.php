<?php

/** Create a function that returns true if an input string
 * contains only uppercase or only lowercase letters.
 */

function sameCase($str) {

    if (strtolower($str) == $str || strtoupper($str) == $str){
        return true;
    }

    return false;

}


echo "<pre>";
die(var_dump(sameCase("MAMAMD")));