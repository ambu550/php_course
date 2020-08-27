<?php
/*
 * 2. Дано: ассоциативный массив. Написать функцию arrayReverseKeys($a),
 * которая перевернет ключи этого массива, используя минимальное количество циклов.
 * Функция должна возвращать массив как результат.
Пример:
$a = array( ‘a’ => ‘apple’, ‘b’ => ‘banana’, ‘c’ => ‘cherry’);
Результат — ключи идут в обратном порядке:
$a = array( ‘c’ => ‘apple’, ‘b’ => ‘banana’, ‘a’ => ‘cherry’);
 */

$a = array( 'a' => 'apple', 'b' => 'banana','c' => 'cherry');

function arrayReverseKeys($a){
    $new_a =null;
    $cnt =  count($a);
    $i=0;
    $cicle=0;
    foreach ($a as $key => $value) {


      $temp_key[$i+1]= $key;
      $temp_value[$i]= $value;
        $i++;

    }
  /*  print_r($temp_key);
    print_r($temp_value);*/
    for ($i=0; $i<$cnt; $i++){

        $new_array[$temp_key[$cnt-$i]]=$temp_value[$i] ;

        $cicle++;
    }
    print_r($new_array)."\n";
    echo "циклов $cicle \n";
    return $new_array;

}



arrayReverseKeys($a);
