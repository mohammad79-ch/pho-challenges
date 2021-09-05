<?php

// Write a function that takes an int boolean and outputs it's opposite (i.e. 1 becomes 0 and 0 becomes 1).

function flipIntBool($bool){
    return $bool ? 0 : 1;
}


echo "<pre>";
die(var_dump(flipIntBool(1)));