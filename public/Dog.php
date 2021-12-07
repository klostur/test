<?php

class Dog {
    private $name;
    private $age;
    private $color;
    private static $numOfDogs = 0;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
        self::$numOfDogs++;
    }
    public function getName() {
        return $this->name;
    }
    public function setName(string $name):bool {
        $eMsg = true;
        (ctype_alpha($name) && strlen($name) < 21) ? $this->name = $name : $eMsg = false;
        return $eMsg;
    }
    public static function getNumbOfDogs() {
        return self::$numOfDogs;
    }
}
