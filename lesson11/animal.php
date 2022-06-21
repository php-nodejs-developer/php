<?php
// abstract class:
// 1. на основе абстрактного класса нельзя создать экземпляр new Animal();
// 2. может содержать абстрактные методы, те методы без реализации
abstract class Animal {
    // 1. protected свойства и методы доступны внутри текущего класса
    // 2. protected свойства и методы доступны внутри дочернего (производного) класса
    protected ?string $color; // геттер
    protected int $health = 10; // геттер
    protected string $name = 'без имени'; // геттер и сеттер
    // тип данных свойств:
    // 1. указание на тип данных доступен только с php 7.4
    // 2. ? перед типом данных означает, что значение свойства мб NULL
    // 3. перед обращением к типизированному свойству для чтения
    // у него дб задано значение, иначе будет выброшена ошибка

    // начиная с версии php 8.1 перед типом данных свойства можно поставить
    // модификатор readonly, он запретит изменение значение свойства после
    // инициализации.
    // readonly можно использовать только с типизированными свойствами

    public function __construct(string $color){
        $this->color = $color;
    }

    public function eat() :void
    {
        $this->health += 1;
    }

    public function getColor() :?string
    {
        return $this->color;
    }

    public function getName() :?string
    {
        return $this->name;
    }

    public function getHealth() :int
    {
        return $this->health;
    }

    public function setName(string $name) :void
    {
        $this->name = $name;
    }

    // абстрактный метод - метод без реализации, те без {}
    // в дочерних не abstract классах метод должен быть реализован
    // отсутствие реализации в дочерних классах придет к ошибке
    abstract public function play();
}

