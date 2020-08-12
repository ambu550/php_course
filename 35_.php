<?php
$array = array(FALSE => TRUE, TRUE => FALSE, NULL =>
    array(PHP_OS, "PHP_VERSION"));
$array2[NULL] = array('Jeanne d\'Arc');
$array3=$array+$array2;
 print_r($array);//
print_r($array3);