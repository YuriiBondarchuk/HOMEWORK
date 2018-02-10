<?php
/**
 * Создать алгоритм вычисления максимального значения двух переменных при помощи switch
 */

$a = 34;
$b = 31;
$c = $a<$b;
var_dump($c);
echo "<br>";
switch ($c){
    case true:
        echo " Число  $b больше числа $a ";
        break;
    case false:
        echo " Число $a больше числа $b";
        break;

}