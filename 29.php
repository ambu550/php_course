<?php
//29) В массиве содержится 5 чисел. Вывести произведение числа на его квадрат в виде 2^2=4.

$arr = [3, 5, 9, 12, 50];
for ($i = 0; $i < count($arr); $i++) {

    echo $arr[$i]."^".$arr[$i]."=".($arr[$i] * ($arr[$i] ** 2)) . "\n";

    // print ($arr[$i] * ($arr[$i] ** 2)) . "\n";
    // print  ($arr[$i] ** 3) . "\n";
}