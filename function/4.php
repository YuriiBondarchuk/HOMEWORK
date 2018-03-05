<?php
/*
 * Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
 *  В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r.
 *  По умолчанию использовать print_r
 */
error_reporting(E_ALL);
function aray($Week,$type=NULL){
    if($type!=NULL){
        echo"<pre>";
        var_dump($Week);
        echo"</pre>";
    }
    else {
        echo"<pre>";
        print_r($Week);
        echo"</pre>";
    }



}
$dayWeek=[
    1=>'Понедельник',
    2=>'Вторник',
    3=>'Среда',
    4=>'Четверг',
    5=>'Пятница',
    6=>'Субота',
    7=>'Воскресенье'
];
aray($dayWeek);