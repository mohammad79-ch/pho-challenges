<?php

function checkPalindrome($str) {
    $str1 = $str[0];
    $len = strlen($str);

    if ($str1 == $str[$len-1]){
        return true;
    }

    return  false;
}

//  second methods

//function checkPalindrome($str) {
//    $str1 = strrev($str);
//
//    return $str1[0] == $str[0] ? true : false;
//}



echo "<pre>";
die(var_dump(checkPalindrome("mamamk")));