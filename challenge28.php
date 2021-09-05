<?php

function afterNMonths($year, $months)
{

    if ($months < 12) return $year;

    while ($months > 12) {
        $year += 1;

        $months -= 12;
    }

    return $year;

}

echo "<pre>";
die(var_dump(afterNMonths(2000,23)));