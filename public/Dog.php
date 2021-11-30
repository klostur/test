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
    public static function getNumbOfDogs() {
        return self::$numOfDogs;
    }
}