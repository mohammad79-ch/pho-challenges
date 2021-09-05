<?php

/** Create a function that takes two arguments (item, times).
 * The first argument (item) is the item that needs repeating while the second argument (times) is the number
 * of times the item is to be repeated. Return the result in an array.
 */

function repeat($item, $times)
{

    $arr = [];

    for ($i = 0; $i < $times; $i++) {
        $arr[] = $item;
    }

    return $arr;
}

echo "<pre>";
die(var_dump(repeat("mamad", 2)));