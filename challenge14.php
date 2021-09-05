<?php

/**
I have a bucket containing an amount of navy blue paint and I'd like to paint as many walls as possible.
 * Create a function that returns the number of complete walls that I can paint,
 * before I need to head to the shops to buy more.
 */

function howManyWalls($n, $w, $h)
{
    if ($w > $n || $h > $n) return 0 ;

    $total = $w * $h ;

    if ($total > $n) return 0;

    return intval(floor($n / $total));
}

echo "<pre>";
die(var_dump(howManyWalls(200,3,6)));