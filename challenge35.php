<?php

/** Create a function that takes two arguments: the original
 * price and the discount percentage as integers and returns the final price after the discount.
 */

function discount($price,$discount){
    return round(($price * $discount) / 100) ;
}

echo "<pre>";
die(var_dump(discount(25,50)));