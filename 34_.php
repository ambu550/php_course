<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

echo ("<pre>");
print_r($array);
    echo ("</pre>");
?>

</body>
</html>