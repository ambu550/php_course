<?php
/*
 Найти максимальный и минимальный элементы массива и вывести их.
 */
$arr= array(0=>1, 1=>-2, 2=>-9, 4=>3, 5=>1, 6=>12, 7=>-1, 8=>0);
print_r($arr);
$min = min($arr);
$max = max($arr);
echo "минимальное значение $min\n";
echo "максимальное значение $max\n";

// если нужен таки "ЭЛЕМЕНТ"
foreach ($arr as $key => $item) {
    if($item == $min || $item == $max) {
        print_r("$key => $item\n");
    }
}

