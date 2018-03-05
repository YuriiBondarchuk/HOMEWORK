<?php
/**
 * Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
 * Директория и искомое слово задаются как параметры функции.
 */

$Dir = 'E:\OSPanel\domains\fullstack\homework\functions_forms_tasks';
$filename = 'test';

function fileDir($Dir,$filename){
    $list = scandir($Dir);
    $newlist = [];
//    $listseach = [];
    var_dump($list);
    foreach ( $list as $value){
        if ($value!="."&&$value!="..")
            $newlist[] = strpos($value,'.')?substr($value,'0',(strpos($value,'.'))):$value;
    }
    var_dump($newlist);
    echo"Список искомых файлов:<br> ";
    foreach ( $newlist as $key => $valueseach){
        if ($valueseach==$filename){
            $keysearch = $key+2;
             echo "$list[$keysearch]<br>";
        }
    }
    //var_dump($a);
    return  ;
}

fileDir($Dir,10);
