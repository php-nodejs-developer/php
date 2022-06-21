<?php
require_once 'animal.php';
// extends - наследование
// Animal - родительский, базовый, суперкласс
// Mouse - дочерний, производный, подкласс
// множественное наследование классов (т.е. extends Animal, Wild) запрещено
// наследуются все свойства, методы, конструктор*, а доступ
// осуществляется согласно модификаторам доступа
class Mouse extends Animal
{
    private $speed;

    // конструктор дочернего класса может быть похож , а может отличаться от конструктора родителя

    public function __construct(string $color, int $speed)
    {
        // если в дочернем классе определен конструктор, то
        // разработчик обязан вызвать конструктор родителя
        parent::__construct($color);
        $this->speed = $speed;
    }

    // реализация абстрактного метода родителя
    public function play()
    {
        $this->health -= 1;
        echo 'Mouse::play()<br>';
    }
}

