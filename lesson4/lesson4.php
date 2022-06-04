<?php
declare(strict_types=1);
// 1. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД
// 3 ЧИСЛА И ВОЗВРАЩАЕТ НАИМЕНЬШЕЕ ИЗ НИХ

// в php можно указывать типы аргументов (принимаемых значений)
// и тип возвращаемого значения
// по умолчанию будет попытка приведения к указанным типам
// при включенном режиме строгой типизации при не соответствии типов,
// будет возникать Fatal Error

function min_value(int $a, int $b, int $c) :?int
{
    if ($a < $b && $a < $c) return $a;
    if ($b < $a && $b < $c) return $b;
    return $c;
}
// $min = min_value(88.4, 12.22, -4.2); ошибка несоответствия типов
$min = min_value(88, 12, -4);
var_dump($min);

// $min = min_value(2, 5); // Fatal Error: Too few arguments to function
$min = min_value(2, 5, 8, -1);
var_dump($min);


$some_var = 'переменная вне функции';
const OUT_CONST = 'константа вне функции';

function some_func(){
    var_dump($some_var); // null
    var_dump(OUT_CONST); // константа вне функции

    $some_var = 'локальная переменная функции';
}
var_dump($some_var); // переменная вне функции
some_func();


$a = 90;
/*function some_func2(){
    var_dump($a * $a);
}*/

function some_func2($arg){
    var_dump($arg * $arg);
}
some_func2($a);


$a = 1;
$b = 2;

function func(){
    //global указывает, что будут использоваться глобальные переменные
    global $a, $b;
    return $a + $b;
}

var_dump(func()); // 3


// 2. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД
// 2 АРГУМЕНТА ТИПА int И ИЗМЕНЯЕТ ИХ ЗНАЧЕНИЯ, УВЕЛИЧИВАЯ В 2 РАЗА
// передача значений по ссылке
function changeInts(int &$a, int &$b) {
    $a *= 2;
    $b *= 2;
}

$price01 = 6000;
$price02 = 1000;

changeInts($price01, $price02);

var_dump($price01, $price02);


// 3. НАПИШИТЕ ФУНКЦИЮ, КОТОРАЯ ПРИНИМАЕТ НА ВХОД ЛОГИН И ПАРОЛЬ
// ЕСЛИ ЛОГИН НЕ РАВЕН 'qwe', А ПАРОЛЬ НЕ РАВЕН '123',
// ФУНКЦИЯ ВОЗВРАЩАЕТ false,
// В ПРОТИВНОМ СЛУЧАЕ ВОЗВРАЩАЕТ true
// ТИП ВХОДЯЩИХ И ВОЗВРАЩАЕМЫХ ДАННЫХ ОПРЕДЕЛИТЬ САМОСТОЯТЕЛЬНО

function auth(string $login, string $password) :bool
{
    return $login == 'qwe' && $password == '123';
}

if (auth('qwe', '444')) {
    echo '<p>Вы успешно авторизованы</p>';
} else {
    echo '<p>Ошибка авторизации</p>';
}





/*
function greeting(string $name) :string
{
    return "<h3>Добро пожаловать, $name</h3>";
}
echo greeting();
*/

function greeting(string $name='Гость') :string
{
    return "<h3>Добро пожаловать, $name</h3>";
}
echo greeting(); // Добро пожаловать, Гость
echo greeting('Мария'); // Добро пожаловать, Мария


$minus = function (int|float $a, int|float $b) :int|float
{
    return $a - $b;
};
var_dump($minus(2, 5));

$nums = [2, 6, 8];

 $sqrt = function (int|float $a) :int|float
 {
     return $a * $a;
 };

 function change_arr(array &$arr, callable $action){
     foreach ($arr as &$item) {
         $item = $action($item);
     }
 }
 change_arr($nums, $sqrt);
 change_arr($nums, function (){});


