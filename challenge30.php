<?php

/** Create a function that takes an array and a string as arguments and return the index of the string. */

function find_index($arr, $str) {

   return array_search($str,$arr);
}

echo "<pre>";
die(var_dump(find_index([5,6,7,'mamad',9],"5")));