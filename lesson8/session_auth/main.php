<?php
session_start();

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<?php include_once 'menu.php' ?>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet beatae deleniti dignissimos dolorem dolorum ducimus
    esse exercitationem in ipsam laudantium magni nesciunt quod, similique temporibus voluptas. Accusamus atque dolorem
    necessitatibus odit quia, sint. Adipisci in laudantium minima nam suscipit voluptatem?
</p>

<!-- форма доступна только авторизованным пользователям -->
<?php if(isset($_SESSION['login'])): ?>
<form>
    <textarea></textarea>
    <input type="submit" value="Добавить комментарий">
</form>
<?php endif; ?>

</body>
</html>
