<?php


/** Create a function that checks if the argument is an integer or a string.
 * Return "int" if it's an integer and "str" if it's a string.
 */

function intOrString($param) {

    return is_string($param) ? "str" : "int";

}

echo "<pre>";
die(var_dump(intOrString(5)));