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

    $sin1 = $katet1/$gipoten;
    $ugol1 = round(((asin($sin1)/pi())*180));

    $sin2 = $katet2/$gipoten;
    $ugol2 = round((asin($sin2)/pi())*180);

    echo "Гипотенуза:\t $gipoten \n";
    echo "площадь:\t $Sqw\n";
    echo "Периметр:\t $perimetr\n";
    echo "углы:\t $ugol1 град \n\t $ugol2 град\n";
}

