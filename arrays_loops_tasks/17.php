<?php
/**
 * Сосктавьте массив месяцев.
 * С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
 * Текущий месяц должен храниться в переменной $month.
 */
$arr=array('Jan','Feb','Mar','Apr','May','June','July','Aug','Sept','Oct','Nov','Dec');
foreach ($arr as $el){
    if ($el!='Jan'){
        echo"$el<br> ";
    }
    else
        echo "<b>$el</b><br>";
}