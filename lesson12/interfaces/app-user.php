<?php

require_once 'i-to-file.php';
require_once 'i-user.php';


class AppUser  implements ToFileInterface, UserInterface {
    private /*string*/ $login;
    private /*string*/ $password;
    private /*string*/ $name;
    private /*int*/ $age;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    // магические методы
    public function __clone()
    {
        /* реализация клонирования */
    }

    public function __toString()
    {
        return "Логин: $this->login; имя: $this->name; возраст: $this->age";
    }

    public function writeToFile(string $file)
    {
        file_put_contents($file, $this, FILE_APPEND);
    }

    public function getRole(): string
    {
        return 'ROLE_USER';
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getIdentifier(): string
    {
        return $this->login;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

}

