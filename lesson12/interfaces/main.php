<?php
require_once 'app-user.php';
// ToFileInterface
// UserInterface
// function someFunc(AppUser $object) AppUser + все наследники

// class A implements ToFileInterface {}
// class B implements ToFileInterface {}
// class C extends AppUser {}
// class D implements UserInterface {}
// class AppUser implements UserInterface, ToFileInterface {}

// A, B, C, AppUser
function someFunc(ToFileInterface $object){
    // $object->writeToFile('file.txt');
    // какие методы можно вызвать у $object и это не приведет к ошибке
}

$admin01 = new AppAdmin('admin', 'admin');
someFunc($admin01);

$user01 = new AppUser('qwerty', '12345');
someFunc($user01);

$user01->setName('Max');
$user01->setAge(33);

// механизм клонирования
$user02 = clone $user01; // вызов метода __clone()
echo $user02; // вызов метода __toString()


