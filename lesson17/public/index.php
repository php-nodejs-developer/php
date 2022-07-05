<?php
require_once '../vendor/autoload.php';
// подключение скриптов, обеспечивающих автозагрузку классов


$url = $_SERVER['REQUEST_URI']; // строка запроса от клиента
var_dump($url);

$http_method = $_SERVER['REQUEST_METHOD'];
var_dump($http_method);

$routes = require_once '../settings/routes.php';
/*'path' => '/',
'method' => 'GET',
'controller' => 'Climbers\Controllers\IndexController::main'*/
foreach ($routes as $route) {
    if ($route['path'] === $url && $route['method'] === $http_method) {
        $controller_str = $route['controller'];
        $controller_arr = explode('::', $controller_str);
        // ['Climbers\Controllers\IndexController', 'main']
        $controller_name = $controller_arr[0];
        $method_name = $controller_arr[1];
        // создать объект нужного контроллера
        $controller_obj = new $controller_name();
        // вызвать нужный метод
        $controller_obj->$method_name();

    }
}









