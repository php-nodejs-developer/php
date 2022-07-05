<?php
// routes.php
return [ // все маршруты
    [ // первый маршрут
        'path' => '/',
        'method' => 'GET',
        'controller' => 'Climbers\Controllers\IndexController::main'
    ],
    [ // второй маршрут
        'path' => '/mountains',
        'method' => 'GET',
        'controller' => 'Climbers\Controllers\MountainsController::mountains'
    ]
];