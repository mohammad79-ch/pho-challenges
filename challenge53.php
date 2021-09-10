<?php

/** Create a function that takes a list of numbers and returns the second largest number.*/

function secondLargest($a) {

    $position = array_search(max($a),$a);

    unset($a[$position]);

    $max = max($a);

    return $max;
}

// second methods to slove

//function secondLargest($a) {
//     rsort($a);
//
//     array_shift($a);
//
//
//     return $a[0];
//}


echo "<pre>";
die(var_dump(secondLargest([5,4,7,12,9,64,555])));