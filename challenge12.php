<?php

// calc area of rectangle

function area($num1,$num2){
    if ($num1 < 0 || $num2 < 0) return -1;

    return $num1 * $num2;
}

echo "<pre>";
die(var_dump(area(5,-8)));