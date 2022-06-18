<?php
require_once 'author.php';
require_once 'article.php';

// создание объекта: new + вызов конструктора
// объект типа Author / экземпляр типа Author
$author01 = new Author();
// доступ к свойствам и методам осуществляется через ->
$author01->name = 'Alex';
$author01->age = 23;

var_dump($author01);

$author02 = new Author();
$author02->name = 'Mark';
$author02->age = 46;

var_dump($author02);

$avg_age = ($author01->age + $author02->age) / 2;
var_dump($avg_age);

$article01 = new Article($author01, 'PHP 8');
var_dump($article01);

$article02 = new Article($author02, 'PHP 5.6');
var_dump($article02);

// вывести имя автора статьи $article02
var_dump($article02->author);
var_dump($article02->author->name);