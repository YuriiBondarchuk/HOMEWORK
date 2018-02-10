<?php
/**
 * Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами
 */


$arr=array();
for ($i=1;$i<=10;$i++){
        $arr[]=rand();
}

print_r($arr);

echo "<br>";

$max=max($arr);

$key_max=array_search($max,$arr);

//var_dump($key_max);
$min=min($arr);

$key_min=array_search($min,$arr);

echo "<br>";

//var_dump($key_min);
echo "<hr><br>";

$arr[$key_min]=$max;

$arr[$key_max]=$min;
print_r($arr);