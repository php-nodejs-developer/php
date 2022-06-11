<?php
// подключить books-data.php
require_once 'books-data.php';

$books = get_books();

// НО
// $books = require_once 'books-data-arr.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книги</title>
</head>
<body>
<!-- подключить header -->
<?php include_once 'components/header.php' ?>

<?php foreach ($books as $book): ?>
<div>
    <h2><?= $book['title']?></h2>
    <p><?= $book['author']?></p>
    <img src="img/<?= $book['img'] ?>" alt="<?= $book['title']?>">
    <p><?= $book['price']?></p>
</div>
<?php endforeach; ?>

<!-- подключить footer -->
<?php include_once 'components/footer.php' ?>
</body>
</html>