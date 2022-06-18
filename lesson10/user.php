<?php

class User {

    // public - модификатор доступа, означает, что доступ
    // к свойству или методу возможен из любого участка программы
    // private - модификатор доступа, означает, что доступ
    // к свойству или методу возможен из текущего класса
    private /*public*/ $login;
    /*private*/ public $password;

    // сеттер
    public function setLogin(string $login_value){
        if (strlen($login_value) < 3) {
            throw new InvalidArgumentException('Значение логина не мб меньше 3');
        }
        $this->login = $login_value;
    }
    // геттер
    public function getLogin(){
        return $this->login;
    }

    public function printInfo(){
        echo "Логин: $this->login, пароль: $this->password";
    }
}

$user = new User();
// $user->login = 900;
$user->setLogin("qwerty");
$user->password = '';
 var_dump($user);
// echo $user;
// var_dump($user->login);
 var_dump($user->getLogin());



