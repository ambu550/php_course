<?php
//18)Преобразовать $a="abradсabra" в "abracbra"(удалить символ "d" и третью букву "a").

$a = "abradсabra";
$a = substr($a ,0,4).substr($a ,5,2).substr($a ,-3,3);
print($a."\n");

// буква "с" c подвохом)))
$b= "с";
var_dump($b);