<?php
require_once 'handler.php';

class JsonHandler extends Handler
{
    public function __construct(string $file)
    {
        parent::__construct($file);
    }

    public function write(){
        var_dump('запись в json');
    }

    public function read(){
        var_dump('чтение из json');
    }
}