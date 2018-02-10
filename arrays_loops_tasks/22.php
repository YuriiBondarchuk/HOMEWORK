<?php
/**
 * Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

    xx
    xxxx
    xxxxxx
    xxxxxxxx
    xxxxxxxxxx
 */
//for ($i=1;$i<=5;$i++){
//    for($c=1;$c<=$i;$c++){
//        echo "xx";
//
//    }
//    echo"<br>";
//}
$i=1;

while ($i<=5){
    $c=1;
    while($c<=$i){
    echo"xx";
    $c++;
    }
    echo"<br>";
    $i++;
}