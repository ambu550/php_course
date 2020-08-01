<?php
/*
 * Вывести все простые числа в диапазоне от 30 до 60
 * Простое - имеет два различных делителя: единицу и самого себя
 */

//перебираем числа от 30 до 60 и предаём в функцию
for($num=30; $num<=60; $num++){
    is_simple($num);
}

//функция определения простого числа
function is_simple($num){
    // перебираем возможные делители от 2 до sqrt(n)
    for($d=2; $d*$d<=$num; $d++){
        // если разделилось нацело, то составное
        if($num%$d==0)
            return false;
    }
    // если нет нетривиальных делителей, то простое

    print($num." ");
    return true;
}

echo "\n";

