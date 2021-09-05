<?php

/**
 *He tells you that if you multiply the height for the square of the radius and multiply the result for
 * the mathematical constant π (Pi), you will obtain the total volume of the pizza. Implement a function
 * that returns the volume of the pizza as a whole number,
 * rounding it to the nearest integer (and rounding up for numbers with .5 as decimal part).
 * (radius² x height x π) = 3.14159... rounded to the nearest integer.
 */

function volPizza($radius, $height) {
    return round((pow($radius,2)) * $height * 3.14);
}

echo "<pre>";
die(var_dump(volPizza(7,2)));