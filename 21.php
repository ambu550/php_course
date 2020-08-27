<?php
// 21) Отсортировать массивы: Имена в алфавитном порядке, в порядке убывания, а возраст в порядке возростания
/**Цикл foreach оперирует не исходным массивом, а его копией. Это означает, что любые изменения, которые вносятся в массив,
 *не могут быть "видны" из тела цикла. Что позволяет, например, в качестве массива использовать не только переменную,
 *но и результат работы какой-нибудь функции, возвращающей массив (в этом случае функция будет вызвана всего один раз - до
 *начала цикла, а затем работа будет производиться с копией возвращенного значения).
 *
 * Пример
 * foreach (массив as $значение)
 * команды;
 */
$spisok = array(
    'roz1' => array('id' => '1', 'age' => '19', 'gender' => 'm', 'login' => 'Kos'),
    'roz2' => array('id' => '2', 'age' => '12', 'gender' => 'm', 'login' => 'Oleg'),
    'roz3' => array('id' => '3', 'age' => '17', 'gender' => 'g', 'login' => 'Sasha'),
    'roz4' => array('id' => '4', 'age' => '14', 'gender' => 'm', 'login' => 'Roma'),
    'roz5' => array('id' => '5', 'age' => '15', 'gender' => 'g', 'login' => 'Galina'),
    'roz6' => array('id' => '6', 'age' => '16', 'gender' => 'g', 'login' => 'Nadi'),
    'roz7' => array('id' => '7', 'age' => '13', 'gender' => 'g', 'login' => 'Evgenia'),
    'roz8' => array('id' => '8', 'age' => '18', 'gender' => 'm', 'login' => 'Sveta'),
    'roz9' => array('id' => '9', 'age' => '11', 'gender' => 'g', 'login' => 'Julia'));


function sort_nested($spisok, $uslovie)
{
    usort($spisok, function ($a, $b) use ($uslovie) {
        $res = 0;

        $a = (object)$a;
        $b = (object)$b;


        foreach ($uslovie as $k => $v) {
            if ($a->$k == $b->$k) continue;

            $res = ($a->$k < $b->$k) ? -1 : 1;
            if ($v == 'desc') $res = -$res;
            break;

        }

        return $res;
    });

    return $spisok;
}


print_r(sort_nested($spisok, array('login' => 'desc')));
print_r(sort_nested($spisok, array('age' => 'asc')));