<?php

class UsersContr extends Users {
    public function createUser($nom,$description,$datecreation,$logo){
        $this->setUser($nom,$description,$datecreation,$logo);
    }
}