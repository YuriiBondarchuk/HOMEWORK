<?php
/**
 * 2. Создать форму с элементом textarea.
 * При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
 * Реализовать с помощью функции.
 */

$a=$_POST['string1'];



$strSort=function  () use ($a){

    $arr=explode(" ",$a);
    foreach ($arr as $key=>$value){
    $arr3[strlen($value)]=$value;
    }
    krsort($arr3);
return $arr3;
};
//print_r($strSort());
//echo"<br>";

function maxStringEch($arr2){

    $col=0;
    foreach ($arr2 as $value){
        $col++;
        if($col<=3){
            echo"$value<br>";
        }
        else {
            break;}
    }



}

maxStringEch($strSort());
