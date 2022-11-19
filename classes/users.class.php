<?php

class Users extends Dbh {
    
    protected function getUser($nom){
        $sql = "select * from club where nom = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom]);

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function setUser($nom,$membres,$description){
        $sql = "insert into club (nom,membres,description) values(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$membres,$description]);

    }
}