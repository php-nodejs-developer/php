<?php
// однострочный комментарий
# однострочный комментарий в стиле Unix
/*
   многострочный
   комментарий
*/
// если в файле только php инструкции,
// закрывающий тег опускают
echo 'Ответ сервера (часть 1)';
var_dump('Ответ сервера (часть 2)'); // для отладки

$login = 'qwerty';
var_dump($login);

$login = 'asd';
var_dump($login);

// вернет true, если переменной было установлено
// значение и это значение не null
var_dump(isset($login));
var_dump(isset($password));

unset($login);
var_dump($login);

// объявление констант
const ERROR = 1; // ERROR - имя константы, 1 - значение
define('MIN_VALUE', 100); // MIN_VALUE - имя константы, 100 - значение

var_dump(ERROR, MIN_VALUE);

var_dump(PHP_INT_MAX, PHP_INT_MIN);


$password = '123f'; // ''  ""
echo 'Пароль: $password'; // Пароль: $password
echo "Пароль: $password"; // Пароль: 123f

$a = 2 ** 3; // 2 возвели в 3 степень
var_dump($a);

$name = 'Иван';
$surname = 'Гришин';

$full_name = $name . ' ' . $surname;
var_dump($full_name); // 'Иван Гришин'

$num = 1; // 1
$num += 12; // 13
$num -= 3; // 10
$num /= 1; // 10
$num **= 2; // 100
var_dump($num); // x-debug

?>
Ответ сервера (часть 3)
