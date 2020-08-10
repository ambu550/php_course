<?php
/*
 * Создать константу и присвоить ей значение.
  Проверить:
  * присвоилось ли значение константе,
  * вывести значение,
  * попытаться изменить значение.
 */

define ("SUPER_CONSTANT", "Тестеры - лучшие!");
if (defined("SUPER_CONSTANT")==true) echo "Константе SUPER_CONSTANT присвоилось  значение!\n";
//var_dump(SUPER_CONSTANT);
echo SUPER_CONSTANT."\n";
define ("SUPER_CONSTANT", "Девы - лучшие!");
echo SUPER_CONSTANT."\n";
