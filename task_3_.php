<?php
/*
 * 3. Считать с консоли длины катетов прямоугольного треугольника
 * и рассчитать его гипотенузу, площадь, углы(в градусах), периметр.
 */



fwrite(STDOUT, "Введите длину первого катета: ");
$katet1 = trim(fgets(STDIN));
fwrite(STDOUT, "Введите длину второго катета: ");
$katet2 = trim(fgets(STDIN));

settype($katet1, "float");
settype($katet2, "float");

if ($katet1 == 0 || $katet2 ==0)
{
    echo "Введите коррректные значения";
}
else {
    $gipoten = sqrt($katet1 **2 + $katet2**2);
    $Sqw = ($katet1*$katet2)/2;
    $perimetr = $katet1+$katet2+$gipoten;

   // $ugol_1 = round(180 / pi() * acos((pow($katet1, 2) + pow($katet2, 2) - pow($gipoten, 2)) / (2 * $katet2 * $katet1)), 2);


    echo "Гипотенуза: $gipoten \n";
    echo "площадь:  $Sqw\n";
    echo "углы:  $ugol_1\n";
    echo "Периметр:  $perimetr\n";
}

echo "$katet1 $katet2 \n";
