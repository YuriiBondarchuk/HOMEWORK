<?php
/*15. Написать калькулятор.
Переменная $a = изменяемое число.
Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
 На экран выводить результат в зависимости от значений этих переменных.
Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.*/
//простой калькулятор

$a=$_POST['number1'];
$b=$_POST['number2'];
if ($a>$b)
    echo "Максимальное из двух чисел $a";
elseif ($a==$b)
    echo 'Переменные равны';
else
    echo "Максимальное из двух чисел $b";