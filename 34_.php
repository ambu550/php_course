
<?php
/*
* 34) Назовите пары ключ\значение в массиве $array.
* Добавьте значение 'Jeanne d'Arc' в массив NULL.
* Используйте теги "<pre>" для структурированного отображения.
* Выведите массив 3-мя различными способами.
*/


$array = array(FALSE => TRUE, TRUE => FALSE, NULL =>
array(PHP_OS, "PHP_VERSION"));

$array2 = 'Jeanne d\'Arc';
array_push($array[NULL],$array2);
/*
echo ("<pre>");
echo ("</pre>");
*/

print_r($array);

var_dump($array);

foreach($array as $key => $res)
{
    if($key|| $key===0){
    echo "$key => $res \n";}else{
    foreach($res  as  $in_key => $value)
    {
        echo "[$key][$in_key] = $value \n";
    }}
}

?>
