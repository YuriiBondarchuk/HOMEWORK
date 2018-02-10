<?php
/**
 * Написать функцию, которая переворачивает строку.
 * Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы
 */
$string=$_POST['string'];
echo "$string<br>";

function obrSortstring ($string){

    $arr=str_split($string);
//    print_r($arr);

        krsort($arr,SORT_REGULAR);

    $stringobr=implode($arr);
    //print_r($stringobr);

        return $stringobr;
}
echo obrSortstring($string);

