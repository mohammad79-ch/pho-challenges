<?php

/**  Returns the number of arguments passed to the function */

function numberArgs(...$item) {
     return count(...$item);
}

echo "<pre>";
die(var_dump(numberArgs([5,6,7,"mamad"])));