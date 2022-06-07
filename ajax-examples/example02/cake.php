<?php
// cake.php
// обрабатывает запрос об одном тортике
if ($_SERVER['REQUEST_METHOD'] !== 'GET'){
    echo json_encode([
        'error'=>'недопустимый http метод'
    ]);
}
$cake_id = $_GET['id'];
if (!isset($cake_id)){
    echo json_encode([
        'error'=>'id тортика не передан'
    ]);
}
$cakes = require_once 'data.php';

foreach ($cakes as $item) {
    if ($item['id'] === (int) $cake_id) {
        $cake = $item;
        break;
    }
}
if (!isset($cake)){
    echo json_encode([
        'error'=>'id тортика не передан'
    ]);
}
echo json_encode($cake);