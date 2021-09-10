<?php

/** Write a function that searches an array of names (unsorted) for the
 * name "Bob" and returns the location in the array.
 * If Bob is not in the array, return -1.
 */

function findBob($names) {

   $bobIndex = array_search('Bob',$names);

   return  is_integer($bobIndex) ? "Index ". $bobIndex : -1;
}


echo "<pre>";
die(var_dump(findBob(["Mamad","Bob"])));