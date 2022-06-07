<?php // cakes.php
$cakes = require_once 'data.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тортики</title>
</head>
<body>

<?php foreach ($cakes as $cake): ?>
    <div>
        <h2><?= $cake['name'] ?></h2>
        <img src="images/<?= $cake['main_img'] ?>">
        <p>Стоимость: <?= $cake['price'] . $cake['currency'] ?></p>
        <button data-id="<?= $cake['id'] ?>" type="button">Подробнее</button>

        <!-- вывод описания тортика и дополнительных изображений -->
    </div>
<?php endforeach; ?>


<script src="cake.js"></script>
</body>
</html>
