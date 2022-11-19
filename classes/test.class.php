<?php
    require_once 'dbh.class.php';

class Test extends Dbh {
    public function getUsers(){
        $sql = "select * from club";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['nom'].'<br>';
        }
    }

    public function getUsersStmt($nom,$membres){
        $sql = "select * from club WHERE nom = ? and membres = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$membres]);
        $names= $stmt->fetchAll();
        
        foreach($names as $nom){
            echo $nom['nom'].'<br>';
        }
        
    }

    public function setUsersStmt($nom,$membres,$description){
        $sql = "insert into club (nom,membres,description) values(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$membres,$description]);

    }
}