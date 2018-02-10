<?php
/**
 * Как можно упростить функцию test() в данном скрипте?
 */

//function test($x, $y)
//{
//    if ($y == 0) {
//        return false;
//    }
//
//    return $x / $y;
//
//}
//
//echo test(1, 2) or die('Error');
//echo 'Unreached line';

function test($x, $y)
{
    return ($y==0)? exit('Error'): ($x / $y);

}
echo test(10,0);