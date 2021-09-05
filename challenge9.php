<?php

//Write a function that takes an integer and returns a string with the given number of "a"s in Edabit.

function howManyTimes($num){
    $str = "";

    for ($i=0;$i<$num;$i++){
        $str .= "a";
    }

    return "Ed".$str."bit";

}

// second methods

//function howManyTimes($num){
//    return "Ed".str_repeat('a',$num)."bit";
//}

echo howManyTimes(10);