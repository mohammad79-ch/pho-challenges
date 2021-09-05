<?php

/** Create a function that takes an array of numbers or letters and returns a string. */

function arrayToString($arr) {

    return join('',$arr);

}

echo "<pre>";
die(var_dump(arrayToString([1, 2, 3, "a", "s", "dAAAA"])));