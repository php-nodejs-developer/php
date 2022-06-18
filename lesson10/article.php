<?php

class Article {
    public $author; // *
    public $title; // *
    public $text;
    public $created; // *

    // если нужно установить значения свойствам
    // или просто выполнить какие-то действия
    // в момент создания объекта, тогда необходимо
    // переопределить конструктор
    public function __construct(Author $author_value, string $title_value) {
        // псевдопеременная $this используется только внутри класса
        // для доступа к методам и свойствам.
        // $this - ссылка на текущий объект
        $this->author = $author_value;
        $this->title = $title_value;

        $this->created = new DateTime();
    }
}




