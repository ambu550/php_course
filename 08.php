<?php
/*
    Как необходимо изменить инициализацию массива, чтобы значение "California"
    имело индекс=4 без явного задания 4 => "California":
 */
$states_of_the_USA=array("Alabama", "Colorado", "Hawaii", "California");


$states_of_the_USA[4] = $states_of_the_USA[3];
unset($states_of_the_USA[3]);
echo($states_of_the_USA[4]."\n");

/*
//а можно просто добавить эдемент в начало массива
array_unshift($states_of_the_USA,"Jmerenka");
echo($states_of_the_USA[4]."\n");
*/

/*
//проверка
var_dump($states_of_the_USA);
*/