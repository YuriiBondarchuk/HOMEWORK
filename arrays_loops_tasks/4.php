<?php
/**
 * Дан массив $arr.
 * С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')
 */
$arr=array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $stol=> $coun){
    echo "$stol<br>";
}
echo"<br><hr><br>";

foreach ($arr as $coun){
    echo "$coun<br>";
}