<?php

$server = '127.0.0.1'; // 127.0.0.1
$port = '3306'; // если стандартный, можно не указывать
$username = 'ifmo'; // root имя пользователя для подключения к серверу
$password = 'web'; // пароль для подключения к серверу
$db_name = 'sql_lessons'; // имя БД, если уже создана

$options = [
    // отображение ошибок, которые возникают при выполнении
    // SQL запросов
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

// для подключения дб доступно соответствующее расширение в php.ini файле
// например, extension=pdo_mysql
$connection = new PDO("mysql:host=$server;port=$port;dbname=$db_name",
                        $username, $password, $options);

var_dump($connection);

// в запросы через переменные не передаются потенциально
// опасные данные, значит можно не использовать подготовленный запрос

// используем метод exec объекта PDO для выполнения запроса,
// тк запрос не является SELECT запросом
$sql = 'CREATE TABLE IF NOT EXISTS tb_courses(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    duration TINYINT UNSIGNED NOT NULL,
    picture VARCHAR(255) DEFAULT \'course.png\',
    start DATE NOT NULL
);';
$result = $connection->exec($sql);
var_dump('CREATE', $result);

// используем метод query объекта PDO для выполнения запроса,
// тк запрос является SELECT запросом
$sql = 'SELECT * FROM tb_courses WHERE duration > 2';
$statement = $connection->query($sql);
// $statement - экземпляр (объект) PDOStatement, в данном случае он
// позволит получить данные (результат SELECT запроса)
$result = $statement->fetchAll(PDO::FETCH_ASSOC); // получение данных
// $result = $statement->fetch(PDO::FETCH_ASSOC); // получение данных
var_dump('SELECT', $result);


// в запросы через переменные передаются потенциально опасные данные,
// значит лучше использовать подготовленный запрос
// он защищает от SQL инъекций через экранирование
$title = 'C++';
$date = '2022-10-01';
$duration = 3;
$sql = "INSERT INTO tb_courses (title, duration, start)
        VALUES (:course_title, :duration, :start_date)";
$data = [
     'course_title' => $title,
     'start_date' => $date,
     'duration' => $duration
];
// создание подготовленного запроса:
// $statement - экземпляр (объект) PDOStatement, в данном случае он
// позволит безопасно выполнить SQL запрос
$statement = $connection->prepare($sql);
// выполнение запроса, привязка массива с параметрами,
// вместо ключей (параметров запроса) подставляются значения из массива
$result = $statement->execute($data);
var_dump('INSERT', $result);

$duration = 4;
$sql = "SELECT * FROM tb_courses WHERE duration < :dur";
// создание подготовленного запроса, в данном случае он
// позволит безопасно выполнить SQL запрос
$statement = $connection->prepare($sql);
$result = $statement->execute(['dur' => $duration]);
var_dump('SELECT', $result);
$select_result = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($select_result);

$id = 1;
$sql = "SELECT * FROM tb_courses WHERE id = :search_id";

$statement = $connection->prepare($sql);
$result = $statement->execute(['search_id' => $id]);
var_dump('SELECT', $result);

$select_result = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($select_result);


$duration = 2;
$title = 'C++';
$sql = "SELECT * FROM tb_courses WHERE duration > ? AND title = ?";
$data = [$duration, $title];

$statement = $connection->prepare($sql);
$result = $statement->execute($data);
var_dump('SELECT', $result);

$select_result = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($select_result);


