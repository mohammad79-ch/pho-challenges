<?php

// Create a function that takes a number n and returns the nth even number.

function nth_even($num)
{
    $original = $num;
    if ($num == 0) return 0;
    $arr = [];
    $num = $num * 2;

    $i = 0;
    while ($i < $num) {
        if ($i % 2 == 0){
        array_push($arr, $i);
        }
        $i++;
    }

    return $arr[$original-1];
}

echo "<pre>";
die(var_dump(nth_even(100)));