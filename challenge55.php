<?php

/** Given two unique integer arrays $a and $b, and an integer target value $v,
 * create a function to determine whether there is a pair of numbers that add up to the
 * target value $v, where one number comes from one array $a and the other comes from the second array $b.
 *Return true if there is a pair that adds up to the target value and false otherwise. */


function sumOfTwo($a, $b, $v) {

        if (count($a) > count($b)){
            $max = count($a);
            $arr1 = $a;
            $min = count($b);
            $arr2 = $b;
        }elseif (count($a ) < count($b)){
            $max = count($b);
            $min = count($a);
            $arr2 = $a;
            $arr1 = $b;
        }else{
            $max = count($a);
            $min = count($a);
            $arr1 = $a;
            $arr2 =$b;
        }


        for ($i=0;$i<$max;$i++){
            for ($x=0;$x < $min;$x++){
                $sum = $arr1[$i] + $arr2[$x];

                if ($sum == $v){
                    return true;
                }
            }
        }

        return false;
}

echo "<pre>";
die(var_dump(sumOfTwo([1,2,15,84], [4,5, 6], 2)));