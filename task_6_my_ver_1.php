<?php
/*
6. Реализовать функцию шифрования строки по словарю + шифр цезаря, реализовать функцию дешифровки
*/



global $zakodir;
global $alph;
$alph = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";
$input = "Test case 123 a y z";
$code = 1;

function zakodirovat($input, $code)
{
    global $alph;
    global $zakodir;
    //алфавит


//проверка на валидность введённых данных
    if ($code < 1 || $code >= 26 || gettype($input) != "string" || gettype($code) != "integer") {
        echo "wrong input or code!!!";

    } else {
        // перевон в нижний регистр
        $input = strtolower($input);
        $zakodir = "";
        echo "Введено: " . $input . "\n";

//перебор введённой строки
        for ($i = 0; $i < strlen($input); $i++) {
            //выбираем каждую букву
            $letter = substr($input, $i, 1);
            //позиция буквы в алфавите
            $n = stripos($alph, $letter);
            //проверка если не буква + шифровка
            if ($n === false) {
                $encr = $letter;
            } else {
                $encr = substr($alph, $n + $code, 1);
            }
            $zakodir = $zakodir . $encr;
        }
        echo "Зашифровано: " . $zakodir . "\n";
        return $zakodir;
    }
}

function razkodirovat($zakodir, $code)
{
    global $alph;

    $razkodir = "";
    for ($i = 0; $i < strlen($zakodir); $i++) {
        //выбираем каждую букву
        $letter = substr($zakodir, $i, 1);
        //позиция буквы в алфавите
        $n = strrpos($alph, $letter);
        //проверка если не буква + разшифровка
        if ($n === false) {
            $decr = $letter;
        } else {
            $decr = substr($alph, $n - $code, 1);
        }
        $razkodir = $razkodir . $decr;
    }
    echo "Разшифровано: " . $razkodir . "\n";
}

zakodirovat($input, $code);

razkodirovat($zakodir, $code);

$start = microtime(true);
function serchInArray($a, $b){
    if (in_array($b, $a)) {
        return TRUE;


    }else{
        return FALSE;
    }

}






