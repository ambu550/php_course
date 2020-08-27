<?php
/*
 * 1. Дано массив целых чисел $a, отсортированный по возрастанию,
 * и некое число $b. Написать функцию searchInArray($a, $b), которая максимально быстро определит,
 * есть ли в массиве искомый элемент и вернет TRUE или FALSE.
 */

$a = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15 ,16 ,17 ,18, 19, 20];

$b = 5;

$start = microtime(true);
function serchInArray($a, $b){
    if (in_array($b, $a)) {
        return TRUE;


    }else{
        return FALSE;
    }

}
$res = serchInArray($a, $b);

echo 'Время выполнения скрипта №1 : '.round(microtime(true) - $start, 4).' сек.';
var_dump(($res));



$start2 = microtime(true);
global $res2;
function serchInArray2($a, $b){
    if (in_array($b, $a)) {
        $res2= TRUE;
        return $res2;
        return FALSE;
    }else{
        return FALSE;
    }

}
 serchInArray2($a, $b);
echo 'Время выполнения скрипта №2 : '.round(microtime(true) - $start2, 4).' сек.';
var_dump(($res));