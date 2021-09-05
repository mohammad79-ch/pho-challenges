<?php

/** Create a function that takes an array of numbers $arr and returns an inverted array. */

function invertArray($arr) {

    $final = [];

    foreach ($arr as $item){
       $item *= -1;
        array_push($final,$item);
    }

    return $final;
}

// second methods

//function invertArray($arr) {
//
//    return array_map(function ($item){
//        return $item * -1;
//    },$arr);
//
//}

echo "<pre>";
die(var_dump(invertArray([1,2,3,-4,-5,-5])));