<?php
/*
* 30) Измените "W" из строки $string на "Q".
* Не используйте строковые функции.
*/

$string = 'Winter is coming!';

$array = str_split($string);
$array[0] = 'Q';
$string =implode($array);

echo $string."\n";