<?php

class clubs extends Dbh {
    
    protected function getClub($nom){
        $sql = "select * from club where nom = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom]);

        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getClubs(){
        $sql = "select * from club";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
 

    protected function setClub($nom,$description,$datecreation,$logo){
        $sql = "insert into club (nom,description,date_creation,logo) values(?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$description,$datecreation,$logo]);

    }
}