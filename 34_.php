<?php
$array = array(FALSE => TRUE, TRUE => FALSE, NULL =>
    array(PHP_OS, "PHP_VERSION"));
$array2[NULL] = array(2 =>'Jeanne d\'Arc');
//$array3=$array2+$array;
$array3=array_merge($array,$array2);
 print_r($array);//
print_r($array2);//
print_r($array3);