<?php

// Create a function that takes an array and returns the sum of all numbers in the array.

function getSumOfItems($arr){
    return array_sum($arr);
}

echo "<pre>";
die(var_dump(getSumOfItems([50,51])));