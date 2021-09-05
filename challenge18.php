<?php

/** You hired three programmers and you (hopefully) pay them.
 * Create a function that takes three numbers (the hourly wages of each programmer)
 * and returns the difference between the highest-paid programmer and the lowest-paid.
 */

function programmers($one, $two, $three) {

    $max = max($one,$three,$two);
    $min = min($one,$three,$two);


    return $max - $min;
}

echo "<pre>";
die(var_dump(programmers(33, 72, 74)));