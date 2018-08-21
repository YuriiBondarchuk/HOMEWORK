<?php
$str = 'Doorrsyyy Kaangaroott';
function strposm($str)
{
    $temp_char = [];
    $arr = explode(' ', $str);
    foreach ($arr as $value) {
        $temp = str_split($value);
        foreach ($temp as $key => $value) {

            if ($key != 0) {
                if ($temp[$key] === $temp[$key - 1]) {
                    array_push($temp_char, $temp[$key] . $temp[$key - 1]);


                }
            }
        }
    }
    var_dump($temp_char);
//    echo 'longest common part :';
//    echo "</br>";
//    foreach (array_unique($temp_char) as $value) {
//        echo "$value ";
//        echo "</br>";
//    }
}

strposm($str);