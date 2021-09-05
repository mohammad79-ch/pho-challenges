<?php

/** Create a program that will take two arrays of integers,
 * $a and $b. Each array will consist of 3 positive integers,
 * representing the dimensions of cuboids $a and $b.
 * Find the difference of the cuboids' volumes.

For example, if the parameters passed are ([2, 2, 3], [5, 4, 1]),
 * the volume of $a is 12 and the volume of $b is 20. Therefore, the function should return 8.
 */

function findDifference($a, $b)
{
    $sum1 = 1;
    $sum2 = 1;
    for ($i = 0; $i <= count($a) - 1; $i++) {
        $sum1 *= $a[$i];
    }
    for ($i = 0; $i <= count($b) - 1; $i++) {
        $sum2 *= $b[$i];
    }

    return $sum1 > $sum2 ? $sum1 - $sum2 : $sum2 - $sum1;
}

// second methods

//function findDifference($a, $b)
//{
//    $sum1 = array_product($a);
//    $sum2 = array_product($b);
//
//    return $sum1 > $sum2 ? $sum1 - $sum2 : $sum2 - $sum1;
//}


echo "<pre>";
die(var_dump(findDifference([28, 16, 29], [7, 8, 17])));