<?php

/** Create a function that returns true if a string contains any spaces. */

function hasSpaces($str) {

    if ($str[0] == " ") return  true;
   return strpos($str," ") ? true : false;

}

echo "<pre>";
die(var_dump(hasSpaces("mamad")));