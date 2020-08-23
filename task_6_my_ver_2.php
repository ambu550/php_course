<?php
/*
6. Реализовать функцию шифрования строки по словарю + шифр цезаря, реализовать функцию дешифровки
*/


global $zakodir;
global $alph;
$alph = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
        'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];


$input = "Test case 123 a y z";
$code = 1;

function zakodirovat($input, $code)
{
    global $alph;
    global $zakodir;
    $zakodir =[];
    //алфавит



//проверка на валидность введённых данных
    if ($code < 1 || $code >= 26 || gettype($input) != "string" || gettype($code) != "integer") {
        echo "wrong input or code!!!";

    } else {

// перевон в верхний регистр
        $input = strtoupper($input);
        echo "Введено: " . $input . "\n";
        $input = str_split($input);


        for ($i = 0; $i < count($input); $i++) {
            //выбираем каждую букву
            $letter = $input[$i];
            //позиция буквы в алфавите
            $n =array_search($letter,$alph);
            //проверка если не буква + шифровка
            if ($n === false) {
                $encr = $letter;

            } else {
                $encr = $alph[$n + $code];
            }
            $zakodir[$i] = $encr;
        }
    }
    $zakodir = implode($zakodir);
    echo "Зашифровано: " . $zakodir . "\n";
}



function razkodirovat($zakodir, $code)
{
    global $alph;
    $zakodir = str_split($zakodir);
    for ($i = 0; $i < count($zakodir); $i++) {
        //выбираем каждую букву
        $letter = $zakodir[$i];
        //позиция буквы в алфавите
        $n =array_search($letter,$alph);
        //проверка если не буква + шифровка
        if ($n === false) {
            $dencr = $letter;
        } else {
            $n =$n +count($alph)/2;
            $dencr = $alph[$n - $code];
        }
        $razkodir[$i] = $dencr;
    }
    $razkodir = implode($razkodir);
    echo "Разшифровано: " . $razkodir . "\n";
}

zakodirovat($input, $code);
razkodirovat($zakodir, $code);

