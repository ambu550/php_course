<?php
/*
 * Вывести все простые числа в диапазоне от 30 до 60
 * Простое - имеет два различных делителя: единицу и самого себя
 */

$start = 30;
$end = 60;
//перебор диапазона
for ($num = $start; $num <= $end; $num++) {

    $no_change = 0;
    //перебор делителей
    for ($i = 1; $i <= $num; $i++) {
        //проверка на остаток
        $result = $num % $i;
        //счётчик результатов без остатка
        if ($result==0) {
            $no_change++;
        }
    }
    //вывод простых чисел
    if ($no_change<=2){
        echo $num." ";
    }
}
echo "\n";