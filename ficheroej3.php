<?php

    global $num1, $num2;

    $num1 = 4;
    $num2 = 5;

    global $division;
    $division = $num2 / $num1;
    echo $division . "</br>";

    global $modulo;
    $modulo = $num2 % $num1;
    echo $modulo . "</br>";
?>
