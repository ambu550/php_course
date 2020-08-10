<?php
/*
 * Вычислить сумму всех элементов массива с нечетными индексами.
 */

$arr= array(0=>1, 1=>-3, 2=>-9, 4=>1, 5=>3, 6=>12, 7=>-1, 8=>0);
$sum=0;

//получаем все ключи массива
$keys =(array_keys($arr));
//echo count($keys);
//print_r ($keys);

//перебираем ключи
for($i=0; $i<count($keys); $i++){
    //определяем или ключ не чётный
  if ($keys[$i] ==0 || $keys[$i] % 2 == 0) { /*echo $i."==чет ";*/}
  else{echo $keys[$i]."==НЕчет ";
   $k=$keys[$i];
   echo $k." ";
  echo $arr[$k]."   ";
  $sum=$sum +$arr[$k];
  }
}

echo "\n".$sum."\n";

