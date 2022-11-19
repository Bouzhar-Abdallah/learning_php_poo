<?php

class Users extends Dbh {
    
    protected function getUser($nom){
        $sql = "select * from club where nom = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom]);

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function setUser($nom,$description,$datecreation,$logo){
        $sql = "insert into club (nom,description,date_creation,logo) values(?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$description,$datecreation,$logo]);

    }
}