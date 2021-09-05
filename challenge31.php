<?php

/** Create a function which validates whether a bridge is safe to walk on
 * (i.e. has no gaps in it to fall through).
 */

function isSafeBridge($str)
{
    if (strpos($str, " ") > 0  || $str[0] == " "){
        return true;
    }

    return  false;
}

echo "<pre>";
die(var_dump(isSafeBridge("ma maad")));