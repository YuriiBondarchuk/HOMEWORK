<?php
/**
 * Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
 * После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
 */

$arr=array();
for ($i=1;$i<=10;$i++){
    $arr[]=rand(1,100);
}
$dob=1;
print_r($arr);
echo "<br>";
echo "Произведение элементов, которые больше ноля и у которых парные индексы :";
foreach ($arr as $key => $el){
    if ($key%2==0&&$el>0&&$key!=0){
        $dob*=$el;
    }
}
echo" $dob <br><hr><br>";
echo "элементы, которые больше ноля и у которых не парный индекс<br>";
foreach ($arr as $key => $el){
    if ($key%2!=0&&$el>0&&$key!=0){
        echo "$el<br>";
    }
}