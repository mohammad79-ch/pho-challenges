<?php

/** Write a function to check if an array contains a particular number. */

function check($arr, $el) {
    return in_array($el,$arr) ? true : false;
}

// second methods

//function check($arr, $el) {
//    return array_search($el,$arr) ? true : false;
//}

echo "<pre>";

die(var_dump(check([1,2,3,4,5],7)));