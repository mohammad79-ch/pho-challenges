<?php

/** Wild Roger is participating in a Western Showdown,
 * meaning he has to draw (pull out and shoot) his gun faster than his opponent in a gun standoff.

Given two strings,$p1 and $p2, return which person drew their gun the fastest.
 * If both are drawn at the same time, return "tie".
 */

function showdown($p1, $p2) {

    $p1 = strlen($p1);
    $p2 = strlen($p2);

    if ($p1 == $p2) return "tie";
    if ($p1 > $p2) return "p1 and length is $p1";
    if ($p1 < $p2) return "p2 and length is $p2";

}

echo "<pre>";
die(var_dump(showdown("  bang!","     bang!")));