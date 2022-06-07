<?php
// по каждому тортику выводить:
// название (name),
// изображение (main_img),
// стоимость (price) и валюту (currency),
// ссылку 'Подробнее'

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
        <!--<img src="/images/имя файла">-->
        <p>Стоимость: <?= $cake['price'] . $cake['currency'] ?></p>
        <a href="cake.php?id=<?= $cake['id'] ?>">Подробнее</a>
    </div>
<?php endforeach; ?>

</body>
</html>
