<?php
/**
 * Created by PhpStorm.
 * User: Yurii
 * Date: 19.02.2018
 * Time: 20:08
 */
$str = $_POST['text'];

$arr = explode(" ",trim($str," "));

if (!empty(uniqueName($arr))){
    echo "Уникальные слова : <br>";
    foreach (uniqueName($arr) as $value) {
        echo "<< <b>$value</b> >> <br>";
    }

}
else {
    echo "Уныкальных слов нет !";
}


function uniqueName ($arr) {
    $unigue = [];

    foreach ($arr as $value){
        $count = 0;
        foreach ($arr as $item) {
            if ($value==$item){
                $count++;            }
        }

        if ($count==1){
            $unigue [] = $value;
        }
    }
    return $unigue;
}
