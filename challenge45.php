<?php

/** Create a function that takes two numbers and a mathematical operator + - / * and will perform a
 * calculation with the given numbers.
 */

function calculator($num1, $operator, $num2) {

    if ($num2 == 0 || $num2 == 0) return "Invalid";

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;

        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default :
            $result = $num1 % $num2;
    }

    return $result;
}

echo "<pre>";
die(var_dump(calculator(2,"*",5)));