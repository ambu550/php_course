<?php
//Выведите сумму всех цифр в числе $int. Используйте цикл while или do while

$int = '01123581321';
$arr = str_split($int);

$i=0;
$rez=0;
do{
    $rez=$rez+$arr[$i]; $i++;
}
while ($i < count($arr));

echo "Сумма $rez \n";