<?php

class Person {

    //propreties
    public $name;
    public $age;

    //constructor
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    //methods

    public function getPerson()
    {
        return $this->name. "is" .$this->age."years old";
    }

}

