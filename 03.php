<?php
//3) Что выведется?

$a=10;

//Присвоение значения по ссылке
$b=&$a;

unset ($a);

echo $b."\n";
