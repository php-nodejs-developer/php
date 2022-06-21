<?php
// require_once 'animal.php';
require_once 'mouse.php';
require_once 'cat.php';

$mouse01 = new Mouse('black', 20);
$mouse01->eat();
$mouse01->play();

var_dump($mouse01);

$cat01 = new Cat('white');
$cat01->setName('Барсик');
$cat01->eat();
$cat01->play();
$cat01->eatMouse($mouse01);

var_dump($cat01);