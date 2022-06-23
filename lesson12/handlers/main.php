<?php
require_once 'handler.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_name_from_user = $_POST['file_name'];
    //$ext = pathinfo($file_name_from_user, PATHINFO_EXTENSION);
    //if ($ext === 'txt'){
    //    require_once 'txt-handler.php';
    //    $handler = new TxtHandler($file_name_from_user);
    //} elseif ($ext === 'json') {
    //    require_once 'json-handler.php';
    //    $handler = new JsonHandler($file_name_from_user);
    //} else {
    //    throw new Error('Ошибка');
    //}
    $handler = Handler::getHandler($file_name_from_user);

    // полиморфизм наследования
    $handler->add('token', '454h86hf498');
    $handler->write();
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="post" action="main.php">
    <input type="text" name="file_name" placeholder="введите имя файла">
    <input type="submit" value="Отправить">
</form>

</body>
</html>
