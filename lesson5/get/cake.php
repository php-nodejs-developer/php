<?php
// запрос может прийти не тем HTTP методом, который ожидает сервер
// все значения в массиве $_GET - строки!!!
// данных, которые ожидает сервер, могут не прийти
// или прийти не в том виде
// var_dump($_GET);

// var_dump($_SERVER);

// $_SERVER['REQUEST_METHOD'] - получить HTTP метод
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    // перенаправление
    header('Location: cakes.php');
}
$cake_id = $_GET['id'];
if (!isset($cake_id)) {
    header('Location: cakes.php');
}

$cake_id = (int)$cake_id;

$cakes = require_once 'data.php';

foreach ($cakes as $item) {
    if ($item['id'] === $cake_id) {
        $cake = $item;
        break;
    }
}
if (!isset($cake)) {
    header('Location: cakes.php');
}



?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= $cake['name'] ?></title>
</head>
<body>
<h2><?= $cake['name'] ?></h2>
<p><?= $cake['description'] ?></p>
<img src="images/<?= $cake['main_img'] ?>">

<div>
    <?php foreach ($cake['imgs'] as $img):?>
        <img src="images/<?= $img ?>">
    <?php endforeach; ?>
</div>

<p><?= $cake['price'] . $cake['currency'] ?></p>
<button type="button">Заказать</button>
</body>
</html>


