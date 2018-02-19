<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 19.02.2018
 * Time: 20:08
 */
$str = $_POST['text'];
$arr = explode(" ",$str);
$arrsort = array_count_values($arr);
$count = 0;
//var_dump($arrsort);
foreach ( $arrsort as $key => $value) {
    if($value == 1) {
        echo " Унікальне слово :   $key <br> ";
        $count++;
    }
}
if($count == 0){
    echo "В даному тексті унікальні слова відсутні";
}
