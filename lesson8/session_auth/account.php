<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: auth.php');
}
$login = $_SESSION['login'];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
</head>
<body>
<?php include_once 'menu.php' ?>
<h3><?= $login ?></h3>
<h3>Логин: <?= $_SESSION['login'] ?></h3>
</body>
</html>

