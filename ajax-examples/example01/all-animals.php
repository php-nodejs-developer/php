<?php
$animals = [
    [
        'id' => 1,
        'name' => 'Белка',
        'img' => 'https://picsum.photos/id/34/200/300'
    ],
    [
        'id' => 2,
        'name' => 'Заяц',
        'img' => 'https://picsum.photos/id/35/200/300'
    ],
    [
        'id' => 3,
        'name' => 'Ёж',
        'img' => 'https://picsum.photos/id/36/200/300'
    ]
];
// json_encode: кодирование данных в json строку
echo json_encode($animals);