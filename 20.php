<?php

/*
 * Разработать функцию вычисления факториала заданного числа (n!)
 */


function factorial($n)
{
    if($n < 0 ){
        echo "введено отрицательное число!\n";
    }else {

        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact = $fact * $i;
        }
        echo $fact."\n";
    }

}

factorial(10);