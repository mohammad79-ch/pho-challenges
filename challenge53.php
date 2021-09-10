<?php

/** Create a function that takes a list of numbers and returns the second largest number.*/

function secondLargest($a) {

    $position = array_search(max($a),$a);

    unset($a[$position]);

    $max = max($a);

    return $max;
}


echo "<pre>";
die(var_dump(secondLargest([5,4,7,9,555])));