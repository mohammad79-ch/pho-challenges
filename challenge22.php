<?php

/** Create a function that takes a number (from 1 - 60) and returns a corresponding string of hyphens. */

function Go($num) {
    $str = '';
    if ($num <= 60 && $num > 0){
        for ($i=0;$i < $num;$i++){
            $str.="-";
        }
    }

    return $str;
}

echo "<pre>";
die(var_dump(Go(10)));