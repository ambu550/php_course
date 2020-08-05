<?php
/*
 *  Что выведет var_dump($var1 == $var2)
 *
 */
$var1 = array("pen","pencil", "table");
$var2 = array(1 => "pencil", 2 => "table", 0 => "pen");


//bool(true) элементы массива равны хоть и в разной последовательности
var_dump($var1 == $var2);
