<?php

// Write a function that uses the ternary operator to return "yeah" if $bool is true, and "nope" otherwise.

function yeahNope($bool){

    return $bool ? "yeah" : "nope";

}

echo "<pre>";
die(var_dump(yeahNope(false)));