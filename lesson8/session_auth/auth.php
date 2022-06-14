<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: account.php');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['login'] === 'qwe' && $_POST['password'] === '123') {
        $_SESSION['login'] = $_POST['login'];
        header('Location: account.php');
    } else {
        $auth_error = 'Ошибка авторизации';
    }
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- подключить меню -->
    <?php if (isset($auth_error)): ?>
    <p><?= $auth_error ?></p>
    <?php endif; ?>
    <form method="post" action="auth.php">
        <input type="text" name="login" placeholder="введите логин">
        <input type="password" name="password" placeholder="введите пароль">
        <input type="submit" value="Войти">
    </form>
</body>
</html>

