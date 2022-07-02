<?php
// только CREATE запросы на создание таблиц для клуба альпинистов
// PDO и выполнение запросов lesson14/pdo-lesson.php
// SQL: создание таблиц и связей mysql/lesson2.sql

$server = '127.0.0.1';
$port = '3306';
$username = 'ifmo';
$password = 'web';
$db_name = 'sql_lessons';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$connection = new PDO("mysql:host=$server;port=$port;dbname=$db_name",
    $username, $password, $options);

$tb_climbers = 'CREATE TABLE IF NOT EXISTS tb_climbers(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100) NOT NULL,
     address TEXT NOT NULL
 );';

$tb_mountains = 'CREATE TABLE IF NOT EXISTS tb_mountains(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(100) NOT NULL UNIQUE,
     height INT NOT NULL,
     country VARCHAR(100)
 );';

$tb_climbs = 'CREATE TABLE IF NOT EXISTS tb_climbs(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    start DATETIME NOT NULL, -- *
    end DATETIME NOT NULL, -- *
    mountain_id INT NOT NULL,
    CONSTRAINT climbs_mountains
    FOREIGN KEY (mountain_id)
    REFERENCES tb_mountains(id)
    ON DELETE NO ACTION
    ON UPDATE CASCADE
 );';

$tb_climbers_has_tb_climbs = 'CREATE TABLE IF NOT EXISTS tb_climbers_has_tb_climbs(
    climbs_id INT NOT NULL, -- *
    climber_id INT NOT NULL,
    PRIMARY KEY (climbs_id, climber_id),
    CONSTRAINT climbs_fk FOREIGN KEY(climbs_id)
    REFERENCES tb_climbs(id)
    ON UPDATE CASCADE ON DELETE NO ACTION,
    CONSTRAINT climbers_fk FOREIGN KEY(climber_id)
    REFERENCES tb_climbers(id) -- *
    ON UPDATE CASCADE ON DELETE NO ACTION
 );';

if ($connection->exec($tb_climbers) !== false) echo 'Таблица tb_climbers создана<br>';
if ($connection->exec($tb_mountains) !== false) echo 'Таблица tb_mountains создана<br>';
if ($connection->exec($tb_climbs) !== false) echo 'Таблица tb_climbs создана<br>';
if ($connection->exec($tb_climbers_has_tb_climbs) !== false) echo 'Таблица tb_climbers_has_tb_climbs создана<br>';
