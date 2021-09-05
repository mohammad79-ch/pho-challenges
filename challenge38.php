<?php

/** Mubashir was reading about Doubleton Numbers on Wikipedia.
 *
 * A natural number is a "Doubleton Number", if it contains exactly two distinct digits.
 * For example, 23, 35, 100, 12121 are doubleton numbers, and 123 and 114455 are not.
 *
 * Create a function which takes a number $n and finds the next doubleton number. */

function doubleton($n)
{

    $i = $n + 1;
    while (true) {
        $spl = str_split($i);

        if (count(array_unique($spl)) == 2) {
            return $i;
        }
        $i++;
    }

}

echo "<pre>";
die(var_dump(doubleton(120)));