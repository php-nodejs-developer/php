<?php

$file_name = 'file.txt';

$data = 'Данные для записи;';

// запись в файл (файл будет создан, в случае отсутствия)
// количество записанных байт
// false в случае ошибки записи
if (file_put_contents($file_name, $data, LOCK_EX | FILE_APPEND) !== false){
    echo 'Данные успешно записаны<br>';
} else {
    echo 'Произошла ошибка записи<br>';
}

$file_name = 'file02.txt';

$data = 'Данные для записи;';

// '\n', '\r\n'
// PHP_EOL - символ переноса строки

// запись в файл
// количество записанных байт
// false в случае ошибки записи
if (file_put_contents($file_name, $data . PHP_EOL, LOCK_EX | FILE_APPEND) !== false){
    echo 'Данные успешно записаны<br>';
} else {
    echo 'Произошла ошибка записи<br>';
}

// чтение из файла (файл должен существовать)
// чтение из файла в строку
$file_name = 'file.txt';
$str_from_file = file_get_contents($file_name);
echo $str_from_file . '<br>';

// чтение из файла в массив (одна строка файла - один элемент массива)
$file_name = 'file02.txt';
$arr_from_file = file($file_name, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
var_dump($arr_from_file);