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

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Животные</title>
</head>
<body>
<?php foreach ($animals as $animal): ?>
    <div>
        <h2><?= $animal['name'] ?></h2>
        <img src="<?= $animal['img'] ?>">
    </div>
<?php endforeach; ?>

</body>
</html>
