<?php

class Person {

    //propreties
    public $name;
    public $eyeColor;
    public $age;

    public static $drinkingAge = 21;

    //constructor
    public function __construct($name,$eyeColor,$age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //methods
    public function setName($name){
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
}

