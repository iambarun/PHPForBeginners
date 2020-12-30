<?php
class Item
{
    public $name;
    public $description = 'This is a default value';
    public static $count = 0;
    CONST MAX_LENGTH = 24;

    public function __construct($name, $description){
        $this->name = $name;
        $this->description = $description;
        static::$count++;
    }

    public function sayHello(){
        echo "Hello ";
    }

    public function getName(){
        return $this -> name;
    }

    public static function showCount(){
        echo static::$count;
    }

}
