<?php
//26) Отсортировать и вывести массив по возрастанию элементов.

$arr= array(0=>1.2, 1=>3, 2=>-3.2, 4=>1.34, 5=>-0.3, 6=>1.2, 7=>1.93, 8=>0.67);
asort($arr);

var_dump($arr);

foreach ($arr as $value){
    echo $value." ";
};
