<?php
/*
 * 1. Дано массив целых чисел $a, отсортированный по возрастанию,
 * и некое число $b. Написать функцию searchInArray($a, $b), которая максимально быстро определит,
 * есть ли в массиве искомый элемент и вернет TRUE или FALSE.
 */





$a = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12, 13, 14, 15 ,16 ,17 ,18, 19, 20, 21, 22];

$b = 23;



function serchInArray($a, $b){
    if (in_array($b, $a)) {
        return TRUE;


    }else{
        return FALSE;
    }

}

$start = microtime(true);

$res = serchInArray($a, $b);

$end = microtime(true);
$runtime = ($end - $start)*1000;
echo 'Время выполнения скрипта №1 : '.round($runtime, 4)." миллисекунд\n";
var_dump(($res));




////////////вариант 2


global $res2;
function serchInArray2($a, $b){
    $a=array_flip($a);
    return  array_key_exists($b,$a);

}

$start2 = microtime(true);

$res2 = serchInArray2($a, $b);

$end2 = microtime(true);
$runtime2 = ($end2 - $start2)*1000;
echo 'Время выполнения скрипта №2 : '. round($runtime2, 4)." миллисекунд\n";
var_dump(($res2));


////////////вариант 3 бинарный поиск


function serchInArray3($a, $b, $start=0, $stop=null){

    //определяем конец массива(или куска массива)
    if($stop ===null){
        //опредилили крайний элемент
        $stop = count($a)-1;
    }

    //защита от рекурсии
    if ($start>$stop){
        return false;
    }


    //определяем середину массива
    $middle=intdiv( ($start + $stop),2);

    //определяем или элемент по середине равен искомому числу
    if ($a[$middle] !== $b){
//        print " start: ".$start ;
//        print " stop: ".$stop ;
//        print " middle: ".$middle."\n" ;
        //если элемент по середине меньше искомого числа то далее проверяем вторую половину массива
        if($a[$middle] < $b){
            $start = $middle + 1;
            //если элемент по середине больше искомого числа то далее проверяем первую половину массива
        }else{
            $stop = $middle -1;
        }
        return  serchInArray3($a, $b, $start, $stop);
    }
    //если элемент по середине равен искомому числу то true
    return true;

}
$start3 = microtime(true);

$res3 =serchInArray3($a,$b);

$end3 = microtime(true);
$runtime3 = ($end3 - $start3)*1000;
echo 'Время выполнения скрипта №3 : '. round($runtime3, 4)." миллисекунд\n";
var_dump(($res3));