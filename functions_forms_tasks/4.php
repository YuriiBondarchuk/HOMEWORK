<?php
/**
 * Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
 */
$Dir = 'E:\OSPanel\domains\fullstack\homework';

function fileDir($Dir){
  $list = scandir($Dir);
  $newlist = [];
    foreach ( $list as $value){
        if ($value!="."&&$value!="..")
            $newlist[] = $value;
    }
    echo "Список файлов и папок в директории :<br> <hr>";

    foreach ($newlist as $value){
        echo" <b> $value<b> <br>";
    }
  return  ;
}

fileDir($Dir);