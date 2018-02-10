<?php
//Определить рекурсивную функцию - аналог функции print_r
$a=2;
$b=3;
$c=2.5;
$d=3.4;
$arr=['I'=>'Yurii','Alina','Son'=>'Matey', 'Illya'];
$sum=$c+$d;
$dob=$a*$b;

print_r($sum);
echo"<br>";
print_r($dob);
echo"<br>";
print_r($arr);
echo"<hr>";


function print_y($typ)
{
    if(is_int($typ)||is_float($typ)||is_string($typ)){
        echo $typ;

    }
    elseif(is_array($typ)) {
        echo"Array (";
        function print_arr ($typ){

        {
            $key=key($typ);
            echo " [$key] => $typ[$key] ";
            $el=next($typ);
            if ($el!=false){
                return print_arr($typ);
            }
            else {
                echo" )";
                return 0;

            }
        }


        }
        print_arr($typ);
    }

}

echo"<hr>";

print_y($sum);
echo"<br>";
print_y($dob);
echo"<br>";
print_y($arr);







//function print_y($typ)
//{
//    if(is_int($typ)||is_float($typ)||is_string($typ)){
//        echo $typ;
//
//    }
//    else {
//        echo"Array (";
//        function print_arr ($typ){
//
//        if (is_array($typ)){
//            $key=key($typ);
//            echo " [$key] => $typ[$key] ";
//            $el=next($typ);
//            if ($el!=false){
//                return print_arr($typ);
//            }
//            else {
//                echo" )";
//                return 0;
//
//            }
//        }
//
//
//        }
//        print_arr($typ);
//    }
//
//}
//
//
//print_y($arr);




























//function print_y($typ)
//{
//    if(is_int($typ)||is_float($typ)||is_string($typ)){
//        echo $typ;
//    }
//    if (is_array($typ)){
//        $key=key($typ);
//        echo " [$key] => $typ[$key] ";
//        $el=next($typ);
//        if ($el!=false){
//            return print_y($typ);
//        }
//        else {
//            echo" )";
//            return 0;
//
//        }
//    }
//}
//
//
//print_y($arr);