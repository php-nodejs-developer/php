<?php
namespace Animals; // объявление пространства имен

// подключение файлов (require и тд)
// импорты (use) и псевдонимы (as)
use Animals\Wild\Dog; // new Dog();
use Farm\People\Farmer as Owner; // new Farmer();

// use Animals\Wild\Dog;  - new Dog()
// use Animals2\Wild2\Dog as BigDog; - new BigDog()

// new \Animals\Wild\Dog();
// new \Animals2\Wild2\Dog();

// полное имя Animals\Mouse
class Mouse{/* описание класса */}

// при обращении к классу в текущем пространстве имен
// используется неполное имя класса (без префиксов)
$jerry = new Mouse();
var_dump($jerry);

require_once 'Dog.php';

// при обращении из !подпространства! имен
// используется полное имя класса
// Mouse.php namespace Animals;
// Dog.php namespace Animals\Wild;
$jack = new Wild\Dog();

$jack = new Dog();
var_dump($jack);
require_once 'Farmer.php';


// абсолютное имя класса для обращения из других
// пространств имен
$farmer = new \Farm\People\Farmer();

$farmer = new Owner();
var_dump($farmer);


/*{ файл 1
    namespace Lib\Auth;
    class Authorization {}  // Lib\Auth\Authorization
}


{   файл 2
    namespace Project\Auth;
    class Authorization {} // Project\Auth\Authorization
}

{   файл 3
    $lib_auth = new Lib\Auth\Authorization();
    $project_auth = new Project\Auth\Authorization();
}*/

// файл 1
// lesson13\namespace;

// файл 2
// First\Second\Third;