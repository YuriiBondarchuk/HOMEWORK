<?php
/**
 *  Составьте массив дней недели.
 * С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
 * Текущий день должен храниться в переменной $day.
 */

$arr=array('Mo','Tu','We','Th','Fr','Sa','Su');
foreach ($arr as $el){
    if ($el=='Sa'){
        $day=$el;
        echo"<i>$day</i><br> ";
    }
    else
        echo "$el<br>";
}