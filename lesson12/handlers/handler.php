<?php
abstract class Handler
{
    protected string $file;
    protected array $settings = [];

    public function __construct(string $file){
        $this->file = $file;
    }

    public function add(string $name, string $value) :void
    {
        $this->settings[$name] = $value;
    }

    public function getByName(string $name) :?string
    {
        return $this->settings[$name];
    }

    public function getAll() :array
    {
        return $this->settings;
    }

    abstract public function write();
    abstract public function read();

    // static метод вызывается без создания объектов,
    // через имя класса
    static public function getHandler(string $file_name_from_user) :Handler
    {
        $ext = pathinfo($file_name_from_user, PATHINFO_EXTENSION);

        if ($ext === 'txt'){
            require_once 'txt-handler.php';
            $handler = new TxtHandler($file_name_from_user);
        } elseif ($ext === 'json') {
            require_once 'json-handler.php';
            $handler = new JsonHandler($file_name_from_user);
        } else {
            throw new Error('Ошибка');
        }
        return $handler;
    }
}