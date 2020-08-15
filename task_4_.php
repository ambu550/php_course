<?php

//var 1 с сортировкой
$arr1 =array (2, 12 ,1 ,72, 55 ,15 ,11);
rsort($arr1);
print $arr1[1]."\n";

//var 2
$arr2 =array (2, 12 ,1 ,72, 55 ,15 ,11);
$rez = array_diff($arr2,[max($arr2)]);
print (max($rez))."\n";
