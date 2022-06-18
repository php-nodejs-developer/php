<?php

class Storage {
    // значение по умолчанию свойства $name уже не null,
    // а 'Сборник статей'
    public $name = 'Сборник статей';
    public $articles = [];
    // в качестве значений по умолчанию
    // нельзя использовать объекты
    // public $created = new DateTime();
    // значения по умолчанию в такой ситуации
    // необходимо задавать через конструктор

    // методы
    // добавление статьи
    public function addArticle(Article $article){
        $this->articles[] = $article;
    }

    // получение статьи по названию
    public function getByTitle(string $title_value){
        foreach ($this->articles as $article) {
            if ($article->title === $title_value){
                return $article;
            }
        }
        return null;
    }

    // получение статей по имени автора
    public function getByAuthorName(string $name_value){
        $result = [];
        foreach ($this->articles as $article) {
            if ($article->author->name === $name_value){
                $result[] = $article;
            }
        }
        return $result;
    }

}
