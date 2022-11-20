<?php

class ClubModel  {

    protected $id;
    protected $name;
    protected $description;

    public function createClub($payload){
        $sql = "insert into club (nom,description,date_creation,logo) values(?,?,?,?)";
       // $stmt = $this->connect()->prepare($sql);
       // $stmt->execute([$payload["name"],$description,$datecreation,$logo]);
    }

    public function listClubs(){
       return [
            0=>["id"=>1, "name"=>"club1"],
            1=>["id"=>2, "name"=>"club2"]
,       ];
    }
    public function getClub($id){
       return ["id"=>1, "name"=>"club1"];
    }
} 