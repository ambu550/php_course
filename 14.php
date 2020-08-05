<?php
/*
 *  Что выведет var_dump($var1 == $var2)?
 */

$s1 ="You are " ;
$s2= "beautiful" ;
$end = "\n";

echo $s1.$s2.$end;

//var_2

$s1 .= $s2.$end;

echo $s1;


