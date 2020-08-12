<?php
//17) Используя функцию settype, придать переменной $a значение 1, если $a="123a";

$a="123a";
settype($a, "boolean");
settype($a, "integer");
var_dump($a);