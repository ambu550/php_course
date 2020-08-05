<?php
/*
 * Тремя способами преобразовать переменную $var в строку.
 */
global $var;
var_dump($var);
$var ='10';
var_dump($var);

$var =20;
$var = (string) $var;
var_dump($var);

$var =30;
$var = strval($var);
var_dump($var);
$var=40;
$var =  $var."";
var_dump($var);

$var=50;
$var = "{$var}";
var_dump($var);

