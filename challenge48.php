<?php

/** Write a function that takes a two-digit number and determines
 * if it's the largest of two possible digit swaps.
 */

function largestSwap($num) {
    return strrev($num) < $num || strrev($num) == $num;
}

echo "<pre>";
die(var_dump(largestSwap(889)));