<?php
//11) Что выведется в случае а) и в случае б) в var_dump($var)? Почему?


///

$var1 = array(0 => "car", 1 => "bicycle", 3 => "auto");
$var2 = array("bike", "bicycle", "car");

//a
$var_a= $var1 + $var2;
var_dump($var_a);


//б
$var_b= $var2 + $var1;
var_dump($var_b);

