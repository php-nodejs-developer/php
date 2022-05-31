<?php

$login = 'qwerty';
$email = 'qwerty@gmail.com';
$age = 22;

$is_admin = false;

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>
    <h2>Логин: <?php echo $login ?></h2>
    <p>Email: <?= $email ?></p> <!-- = заменяет php echo -->
    <p>Возраст: <? echo $age ?></p> <!-- сокращенная запись 1го варианта
     short_open_tag = Off в ini файле-->


     <!-- генерация html в зависимости от условий -->
     <?php if ($is_admin === true): ?>
     <p>Вам доступно добавление и редактирование товаров</p>
     <?php else: ?>
     <p>Вам доступны просмотр и покупка товаров</p>
     <?php endif; ?>

</body>
</html>
