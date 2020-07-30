<?php
/*
 * Вывести количество элементов массива
 */
$box = array(1 => 'помидор',
    '2' => 'яблоко',
    '1key' => 'груша',
    'персик',
    true => 'апельсин');

print count($box)."\n";

//проверка
print(implode(",",$box) ."\n");

print($box[2]."\n");
print($box['1key']."\n");
print($box[3]."\n");
///true перезаписывает 1
print($box[1]."\n");
