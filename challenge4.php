<?php

// concat two array

    function concatArray($arr1,$arr2){

        $concatable = array_merge($arr1,$arr2);

        return $concatable;
    }

    echo "<pre>";
    print_r(concatArray([6,2],[3,4,5]));