<?php
/**
 * Написать функцию, которая в качестве аргумента принимает строку,
 * и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.
 */
error_reporting(E_ALL);

$string='а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

function blString($Arr){
   $newstring= implode(". ",$Arr);

   echo "$newstring";

}


$arr = function () use ($string) {
    $sarr=explode(". ",$string);

    foreach ($sarr as $value){
        $asarr[]=ltrim($value);
    }
    foreach ($asarr as $value2) {
        $Arr[]=mb_strtoupper(mb_substr($value2,0,1,'UTF-8'),'UTF-8').mb_substr($value2,1,null,'UTF-8');
    }
    return $Arr;

    };

blString($arr());
