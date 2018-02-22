<?php
/**
 * 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 *      Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
 */
//$file = fopen("test.txt","a");
$filecol = $_POST['colstr'];
$filestr = file_get_contents("test.txt");
//$a = $file;
var_dump($filestr);
$filearr = explode(" ", $filestr);
//var_dump($filearr);
$newarr=[];
foreach ( $filearr as $value){
    $strl = iconv_strlen($value, 'UTF-8');//Для роботы с кирилическими строками
//    echo "$strl<br>";
    if ($strl <$filecol){
        $newarr[] = $value;
    }
}
$filenew = implode(" ", $newarr);
var_dump($filenew);
file_put_contents("test1.txt", $filenew);