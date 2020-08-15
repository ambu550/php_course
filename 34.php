<?php
//Выведите сумму всех цифр в числе $int. Используйте цикл while или do while



//вариант 1
$int = '01123581321';
//преобразум строку в массив
$arr = str_split($int);

$i=0;
$rez=0;
//пребираем масив
do{
    $rez=$rez+$arr[$i]; $i++;
}
while ($i < count($arr));

echo "Сумма $rez \n";

//вариант 2

$int = '01123581321';
$i=1;
$rez2=0;
$count = strlen($int);
//пребираем масив
do{

    $rez2 = $rez2 + substr($int, 0,1);

    $int =substr($int,1);

    $i++;
}
while ($i <= $count );

echo "Сумма $rez2 \n";