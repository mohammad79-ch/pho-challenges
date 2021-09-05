<?php

/** Create a function that accepts an array and returns the last item in the array. */

function getLastItem($arr) {
    $len = count($arr);

    return $arr[$len-1];
}

// second methods

//function getLastItem($arr) {
//
//    return end($arr);
//}

echo "<pre>";
die(var_dump(getLastItem([1,2,3,4,56,7])));

