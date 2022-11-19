<?php

class Person {
    protected $first="abdallah";
    private $last="bouzhar";
    private $age="32";

}

class pet extends Person{
    public function owner(){
        $a = $this->first;
        return $a;
    }
}