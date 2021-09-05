<?php

/** Create a function that returns an array of all the integers between two given numbers $start and $end */

function rangeOfNum($start, $end) {

    if ($start > $end) return null;
    $arr = [];
    for ($start++ ;$start < $end;$start++){
    array_push($arr,$start);
    }

    return $arr;

}

echo "<pre>";
die(var_dump(rangeOfNum(19,20)));