<?php
// позднее статическое связывание:
// static позволяет сохранить контекст вызова статического метода, в момент выполнения определяя вызывающий класс,
// self - всегда ссылается на текущий класс.

class Animal {
    public static function name(){
        echo '--Animal--';
    }

    public static function printAnimalName() {
        self::name();
        static::name();
    }
}

class Wild extends Animal {
    public static function name(){
        echo '--Wild--';
    }

    public static function printWildName() {
        self::name();
        static::name();
        parent::name();
    }
}

class Fox extends Wild {
    public static function name(){
        echo '--Fox--';
    }
}

Fox::printAnimalName();
Fox::printWildName();