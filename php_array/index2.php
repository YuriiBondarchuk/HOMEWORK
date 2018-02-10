<?php
//Многомерный масив "Книги"
$book1=array('style'=>'artistic', 'author'=>'Yurii', 'name'=>'Tom_Soier', 'price'=>'200$');
$book2=array('style'=>'artistic', 'author'=>'Sergiy', 'name'=>'Nice', 'price'=>'35$');
$book3=array('style'=>'artistic', 'author'=>'Grigoriy', 'name'=>'Heppy', 'price'=>'158$');
$tovar=array('tovar1'=>$book1, 'tovar2'=>$book2, 'tovar3'=>$book3);

echo '<pre>';
print_r($tovar);
echo '<pre>';
echo '<hr>';

//Определение констант
define('UKRAINE','Kiev');
define('BRASIL','Brasil');
define('CHINA','China');
define('POLAND','Warsaw');
$country=array(UKRAINE, BRASIL, CHINA, POLAND);

echo '<pre>';
var_dump($country);
echo '<pre>';
//Скрипт - переменные переменных
echo '<hr><br>';
echo '<hr>';

$helo='day';
$day='next';
$next='two';
$two='You';
$You='I love PHP';
var_dump($$$$$helo) ;