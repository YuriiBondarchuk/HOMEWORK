<?php
/**
 *  Создать генератор случайных таблиц.
 * Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число.
 */

$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rov=5;
$cols=5;
echo"<table border='6px solid'>";
for ($i=1;$i<=$rov;$i++) {
    echo"<tr>";
    for ($j = 1; $j <= $cols; $j++){
        $num=rand();
        $col_key=array_rand($colors);

        echo "<td bgcolor='$colors[$col_key]'>$num</td>";
    }
    echo"</tr>";
}
echo"</table>";
//print_r($colors["$col_key"]);