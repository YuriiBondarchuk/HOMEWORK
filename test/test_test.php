<?php
$str = 'Doorrsyyyy KKanngyyyyoooo';

function strposm($str)
{
    $temp_char = explode(' ', $str);

    $str1 = $temp_char[0];
    $str2 = $temp_char[1];
    $temp_char2 = [];

    for ($i = 0; $i < strlen($str1); $i++) {


        if ($str1[$i] == $str1[$i + 1] || $str1[$i] == $str1[$i - 1]) {
            $temp_char2[0][$i] .= $str1[$i];
        }

    }
    for ($i = 0; $i < strlen($str2); $i++) {


        if ($str2[$i] == $str2[$i + 1] || $str2[$i] == $str2[$i - 1]) {
            $temp_char2[1][$i] .= $str2[$i];
        }

    }
//    var_dump($temp_char2);
    $temp_arr = [];

    foreach ($temp_char2[0] as $item => $value) {

        foreach ($temp_char2[0] as $item2 => $value2) {
            if ($temp_char2[0][$item] == $temp_char2[0][$item2]) {
                $temp_arr[0][$item] .= $temp_char2[0][$item];
            }
        }
    }
    foreach ($temp_char2[1] as $item => $value) {

        foreach ($temp_char2[1] as $item2 => $value2) {
            if ($temp_char2[1][$item] == $temp_char2[1][$item2]) {
                $temp_arr[1][$item] .= $temp_char2[1][$item];
            }
        }
    }

    $result = array_unique(array_merge($temp_arr[0], $temp_arr[1]));
    $result;
    var_dump(array_values($result));
    $general = [];
    $i=0;

    foreach ($result as $item => $value) {

       $general[count($general)]=$value;
       var_dump($general[count($general)-1]);

       var_dump(strlen($value));
        var_dump(strlen($value)>strlen($general[count($general)-1]));
        if (strlen($value)>strlen($general[count($general)-1])){
          $general=[];
          $general[]=$value;

            echo 'yu nun</br>';
            }

        if (strlen($value)==strlen($general[count($general)-1])){
           array_push($general,$value);


        }

    }
    var_dump($general);
}

strposm($str);
