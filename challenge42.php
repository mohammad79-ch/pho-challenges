<?php

/** Create a function that finds the index of a given item.
If the item is not present, return -1.
 */

function search($arr,$item){

    if ($item == $arr[0]) return 0;

    if ($index = array_search($item,$arr)) return $index;

    return  -1;
}

echo "<pre>";
die(var_dump(search([5,6,7],8)));