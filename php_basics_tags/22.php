<?php
/*22. Приведите число -20 к типу boolean. Объясните результат.*/

$a=-20;
$b=(bool)$a;
var_dump($a);
echo "<br><br>";
var_dump($b);
?>

<p>Тип данных boolean принимает одно из двух значени TRUE или FALSE. <br>При привидении целоисельного типа данных
    к типу boolean только число " 0 " принимает значение FALSE  все остальные числа (включая отрицательные )
    принимают значение  TRUE </p>

