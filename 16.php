<?php
//16) Тремя способами преобразовать переменную $var в строку.

global $var;
var_dump($var);
$var ='10';
var_dump($var);

$var =20;
var_dump($var);
$var = (string) $var;
var_dump($var);

$var =30;
var_dump($var);
$var = strval($var);
var_dump($var);

$var=40;
var_dump($var);
$var =  $var."";
var_dump($var);

$var=50;
var_dump($var);
$var = "{$var}";
var_dump($var);

$var=60;
var_dump($var);
settype($var, "string");
var_dump($var);
