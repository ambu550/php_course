<?php
//16) Тремя способами преобразовать переменную $var в строку.


//пустой переменной присваиваем строковое значение
global $var;
var_dump($var);
$var ='10';
var_dump($var);

//оператор приведения типа
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
$var .=  "";           //или  $var =  $var."";
var_dump($var);

$var=50;
var_dump($var);
$var = "{$var}";
var_dump($var);

//задаём тип - строка
$var=60;
var_dump($var);
settype($var, "string");
var_dump($var);

$var=[7,0];
var_dump($var);
$var =implode($var); //$var =join($var);
var_dump($var);

$var=80;
var_dump($var);
$format ="%s";
$var= sprintf ($format,$var);
var_dump($var);


$var=90;
var_dump($var);
$var = <<<EOT
$var
EOT;
var_dump($var);
