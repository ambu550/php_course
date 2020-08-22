<?php
//Шифр Цезаря
global $zakodir;
$input = "Test case 123 a y z";
$code = 1;

function zakodirovat($input, $code)
{
    global $zakodir;
    //алфавит
    $alph = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";

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
                $ecr = $letter;
            } else {
                $ecr = substr($alph, $n + $code, 1);
            }
            $zakodir = $zakodir . $ecr;
        }
        echo "Зашифровано: " . $zakodir . "\n";
        return $zakodir;
    }
}

function razkodirovat($zakodir, $code)
{
    $alph = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";
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

