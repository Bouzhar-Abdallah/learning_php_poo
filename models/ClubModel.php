<?php
include_once PROJ_DIR . "/classes/dbh.class.php";
class ClubModel extends dbh{

    public function createClub($nom,$description,$datecreation){
        $sql = "insert into club (nom,description,date_creation) values(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$nom,$description,$datecreation]);
    }

    public function listClubs(){
        $sql = "select * from club";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
       return $stmt;
            /* 0=>["id"=>1, "name"=>"club1"],
            1=>["id"=>2, "name"=>"club2"], */
        
    }
    public function getClub($id){
        $sql = "select * from club where id=$id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetch();
        return $results;
      /*  return $stmt; */
       
    }
} 