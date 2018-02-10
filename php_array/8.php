<?php
/**
 * Вычислить значение выражения: false && true || false && true || !false && true
 * Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.
 */
 // не знаю на сколько правильно понял задание!!!
$x = 0*1+0*1+1*1;
var_dump($x);
$ost = $x % 2;
echo "<br><br>";
if ($ost==false)
    echo 'false';
else
    echo 'true';