<?php
/**
 * Составьте массив дней недели.
 * С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
 */
$arr=array('Mo','Tu','We','Th','Fr','Sa','Su');
foreach ($arr as $el){
    if ($el=='Sa'or $el=='Su'){
        echo"<b>$el</b><br> ";
    }
    else
        echo "$el<br>";
}