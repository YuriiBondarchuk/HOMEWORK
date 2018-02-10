<?php
/**
 * Создать форму с двумя элементами textarea.
 * При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
 * Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
 * которая будет возвращать массив с общими словами.
 */

$a=preg_split('/[\s,.]+/', $_POST["string1"],-1,PREG_SPLIT_DELIM_CAPTURE);
$b=preg_split('/[\s,.]+/', $_POST["string2"],-1,PREG_SPLIT_DELIM_CAPTURE);
//var_dump($a);
//print_r($b);

function getCommonWords($a,$b){
    $result=array_intersect($a,$b);
        return $result;
}

print_r(getCommonWords($a,$b));

