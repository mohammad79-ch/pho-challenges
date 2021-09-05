<?php

/** Create a function that takes a number
 * as an argument and returns "even" for even numbers and "odd" for odd numbers.
 */

function isEvenOrOdd($num) {
    return $num % 2  == 0 ? "Even" : "Odd";
}

echo "<pre>";
die(var_dump(isEvenOrOdd(6)));