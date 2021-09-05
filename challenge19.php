<?php

/** Given a string, return true if its length is even or false if the length is odd. */

function oddOrEven($str){

    $length = strlen($str);

    return $length % 2 == 0 ? "Even" : "Odd";
}

echo "<pre>";
die(var_dump(oddOrEven("mamad")));