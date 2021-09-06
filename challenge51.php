<?php

/** Create a function that takes an array of numbers and returns a new array, sorted in ascending order (smallest to biggest).
 *
 * Sort numbers array in ascending order.
 * If the function's argument is null, an empty array, or undefined; return an empty array.
 * Return a new array of sorted numbers. */


function sortNumsAscending($arr)
{

    if (is_null($arr) || empty($arr)) return [];

    sort($arr);
    return $arr;

}

echo "<pre>";
die(var_dump(sortNumsAscending([1, 2, 10, -50, 5])));
