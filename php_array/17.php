<?php
/**
 * Альтернативный синтаксис: while
 * Выполнить предыдущие задания при помощи альтернативного синтаксиса
 * Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while.
 * Простое число - это число которое делится только на себя и на 1
*/
echo " Все простые числа в промежутке от 1 до 100 :";
echo "<hr><br>";
$a=1;
while ($a<=100):
    $b=1;
    $c=0;
    while ($b<=$a):
        if($a%$b==0):
            $c++;
            $b++;

        else :
            $b++;
        endif;
    endwhile;
    if ($c==2):
        echo "$a<br>";
    endif;
    $a++;
endwhile;