<?php

/** Write a function that finds the sum of the first $n natural numbers.
 * Make your function recursive.
 */

function sum($n) {

    $sum = 0;
    for ($i=1;$i <= $n;$i++){
        $sum+=$i;
    }

    return $sum;
}

echo "<pre>";
die(var_dump(sum(12)));