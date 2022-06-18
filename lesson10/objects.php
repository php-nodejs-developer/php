<?php
require_once 'author.php';
require_once 'article.php';
require_once 'storage.php';

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

$storage = new Storage();
$storage->addArticle($article02);
$storage->addArticle($article01);

var_dump($storage);

var_dump($storage->getByTitle('JS'));
var_dump($storage->getByTitle('PHP 5.6')->text);

var_dump($storage->getByAuthorName('Mike'));
var_dump($storage->getByAuthorName('Alex'));




