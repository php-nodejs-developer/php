<?php

$ages = [56, 23, 10, 44, 27];

// длина массива
$ages_len = count($ages);
for ($index = 0; $index < $ages_len; $index +=1) {
    $element = $ages[$index];
    var_dump($element);
}

$files = [
    'name' => ['файл 1', 'файл 2'],
    'size' => [23411, 64565],
    'error' => [0, 1]
];

$iteration_count = count($files['error']);
for ($index = 0; $index < count($files['error']); $index +=1) {
    // обработка одного файла,проверка на ошибки, размер, тип и тд
    // перемещение в постоянную директорию, если файл прошел проверки
    $file_error = $files['error'][$index];
    $file_size = $files['size'][$index];
    $file_name = $files['name'][$index];

    var_dump($file_error, $file_size, $file_name);
}