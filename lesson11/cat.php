<?php
require_once 'animal.php';
require_once 'eat-mouse.php';

// 1. implements: класс реализует (имплементирует) интерфейс
// 2. класс обязан реализовать все методы данного интерфейса
// 3. разрешена реализация нескольких интерфейсов
class Cat extends Animal implements EatMouseAble {
    private $mice = 0;
    // в классе не объявлен конструктор, значит
    // наследуется конструктор родителя

    // переопределение метода родителя:
    // изменение функционала метода родителя
    public function eat(): void
    {
        parent::eat(); // вызов метода eat из Animal
        $this->health += 2;
        /*if ($this->mice > 0){
            --$this->mice;
            ++$this->health;
        }*/
    }

    // реализация абстрактного метода родителя
    public function play()
    {
        $this->health -= 1;
        $this->mice -= 1;
        echo 'Cat::play()<br>';
    }

    public function eatMouse(Mouse $mouse)
    {
        $this->mice += 1;
        echo "Кот $this->name съел мышь $mouse->name<br>";
    }
}