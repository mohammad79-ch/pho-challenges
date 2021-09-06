<?php

/** Take an array of integers (positive or negative or both) and return the sum of
 * the absolute value of each element.
 */

function getAbsSum($arr) {

    $arrNum = [];

    foreach ($arr as $item){
        if ($item <= 0){
          $item = $item * -1;
        }

        $arrNum[]=$item;
    }

    return array_sum($arrNum);
}

echo "<pre>";
die(var_dump(getAbsSum([1,2,-3,-4])));