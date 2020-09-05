/*
* 32) Выведите в браузере текстовое поле с заполеннным в нем значением $string.
* В одну строчку.
*/

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?$string = 'TEST'?>
    <title>Document</title>
</head>
<body>

<p><strong>Задание 32</strong></p>

<p><input type="text" value=<?echo $string?>></p>

</body>
</html>


