<?php

$firstNumber = 1.567808;
$secondNumber = 0.356;

function print_var_name($var) {
    foreach($GLOBALS as $var_name => $value) {
        if ($value === $var) {
            return $var_name;
        }
    }

    return false;
}

echo "$".print_var_name($firstNumber)." + "."$".print_var_name($secondNumber).
      " = ".(string)$firstNumber." + ".(string)$secondNumber." = "
      .number_format((float)($firstNumber+$secondNumber), 2, '.', '');;