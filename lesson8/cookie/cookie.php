<?php

// Cookie передаются в заголовках,
// хранятся на клиенте (в браузере) и
// доступны на сервере только при следующем запросе клиента
// в суперглобальном массиве $_COOKIE
// time() возвращает текущее время в секундах
setcookie('cookie_name', 'cookie value', time() + 3600);
var_dump($_COOKIE);

// $background
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = $_POST['color'];
    setcookie('color', $color, time() + 3600);
    header('Location: cookie.php');
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $background = $_COOKIE['color'] ?? 'yellow';
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body style="background-color: <?= $background ?>">

<form action="cookie.php" method="post">
    <label for="color">Изменить цвет фона</label>
    <select id="color" name="color">
        <option value="red">Красный</option>
        <option value="yellow">Желтый</option>
        <option value="blue">Синий</option>
    </select>
    <input type="submit" value="Изменить">
</form>

</body>
</html>
