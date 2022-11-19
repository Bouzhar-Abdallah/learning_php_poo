<?php

class UsersView extends Users {

    public function showUser($nom){
        $results = $this->getUser($nom);
        echo "club name:".$results[0]['nom']." ".$results[0]['membres'];
    }
}