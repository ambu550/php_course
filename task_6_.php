<?php
/*
6. Реализовать функцию шифрования строки по словарю + шифр цезаря, реализовать функцию дешифровки
*/

global $codeText;
$text="мой пароль - 1234";
$shift=1;
//$text слово для зашифровки $shift насколько символов смещать
for($i=0; $i<strlen($text); $i++)  {
    $symbol=ord($text[$i])-$shift;
//находим ASCII код символа
    if($symbol>255)  {
        $symbol=$symbol-255;
    }
    $codeText=$codeText.chr($symbol);
//записываем закодированный вариант
}
echo $codeText."\n";

//Этот скрипт раскодирует текст:


//$text слово для зашифровки $shift насколько символов смещать
for($i=0; $i<strlen($codeText); $i++)  {
    $symbol=ord($codeText[$i])-$shift;
//находим ASCII код символа
if($symbol<$shift)  {
$symbol=255-$shift;
}
$text=$text;
//записываем закодированный вариант
}
echo $text;
