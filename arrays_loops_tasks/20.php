<?php
/**
 * Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.

    x
    xx
    xxx
    xxxx
    xxxxx
 */
for ($i=1;$i<=20;$i++){
    for($c=1;$c<=$i;$c++){
        echo "x";

    }
    echo"<br>";
}