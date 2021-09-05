<?php

//Create a function that takes an array of values resistance that are connected in series,
// and calculates the total resistance of the circuit in ohms.3
// The ohm is the standard unit of electrical resistance in the International System of Units ( SI ).

function seriesResistance($arr){
    $sum = array_sum($arr);

    if($sum <= 1 ){
        return $sum . " ohm";
    }
    return $sum . " ohms";
}


echo "<pre>";
die(var_dump(seriesResistance([1,0])));