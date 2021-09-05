<?php

//Mubashir wants to swap two given numbers!
//It is not returning the right values. Can you help him fix it?

function swap($a, $b) {
    $c = $b;
    $b = $a;
    $a = $c;

    return [$a, $b];
}

echo "<pre>";
print_r(swap(100,200));