<?php
echo $_POST['user_name'];

// информация о загруженных файлах - суперглобальный массив $_FILES
var_dump($_FILES['picture']); /* <input name="picture" accept="image/*" type="file"> */

$file_name = $_FILES['picture']['name'];
$tmp_name = $_FILES['picture']['tmp_name'];

// перед перемещением правильно проверить на тип,
// размер и наличие ошибок
// (сначала на 'error', если там не 0, значит
// файл не был загружен, дальше ничего проверять не нужно)

// генерация нового имени для файла
$file_name = microtime() . $file_name;

// перемещение одного файла из временной директории в постоянную
$move_result = move_uploaded_file($tmp_name, "images/$file_name");

if ($move_result) echo "Файл $file_name успешно загружен";
else echo "Файл $file_name не был загружен";


var_dump($_FILES['multi-picture']); // <input multiple name="multi-picture[]" accept="image/*" type="file">