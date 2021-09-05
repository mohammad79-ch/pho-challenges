<?php

/**  Create a function that takes a string as an argument and converts the first
 character of each word to uppercase.
 Return the newly formatted string. **/

function makeTitle($title){

    $arr = explode(" ", $title);

    $arrayFinal = [];

    foreach ($arr as $item){
        $item = ucfirst($item);
        array_push($arrayFinal,$item);
    }

    $arrayFinal = implode(" ",$arrayFinal);

    return $arrayFinal;
}

// second solution

//function makeTitle($title){
//    return ucwords($title);
//}


echo "<pre>";
die(var_dump(makeTitle("this a test for challenges")));