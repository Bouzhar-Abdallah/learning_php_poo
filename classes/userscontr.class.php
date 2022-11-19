<?php

class UsersContr extends Users {
    public function createUser($nom,$membres,$description){
        $this->setUser($nom,$membres,$description);
    }
}