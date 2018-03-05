<?php
/*15. Написать калькулятор.
Переменная $a = изменяемое число.
Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
 На экран выводить результат в зависимости от значений этих переменных.
Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.*/
//простой калькулятор

$a=$_POST['number1'];
$b=$_POST['number2'];
$operator=$_POST['operator'];
if ($operator=='plus'){
    $result=$a+$b;
    echo "$a + $b = $result";
}

if ($operator=='minus'){
    $result=$a-$b;
    echo "$a - $b = $result";
}

if ($operator=='del'and $b!=0) {
    $result = $a / $b;
    echo "$a / $b = $result";
}
elseif ($b==0&&$operator=='del')
        echo 'На 0 делить нельзя. Учите математику';


if ($operator=='dob'){

    $result=$a*$b;
    echo "$a * $b = $result";
}
if ($operator=='ost'&&$b!=0){
    $result=$a%$b;
    echo "Остаток от деления $a на $b = $result";
}
elseif ($b==0&&$operator=='ost')
    echo 'Операция невозможна так как На 0 делить нельзя!';



