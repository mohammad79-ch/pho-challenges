<?php

/**  Create a function that divides a string into parts of size n. */


function partition($str, $n) {
    return str_split($str,$n);
}

echo "<pre>";
die(var_dump(partition("c++", 2)));