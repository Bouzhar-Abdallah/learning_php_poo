<?php

include_once PROJ_DIR . "/models/ClubModel.php";

class ClubsContr  {
   
    protected $model;
    public function __construct()
    {
        $this->model = new ClubModel();
    }
    public function createClub(){
       echo "display create form";
    }
    public function listClubs(){
        //Get List
        $list = $this->model->listClubs();
        require_once PROJ_DIR . "/views/clubs/list.php";
        return;
    }
    public function editClub(){
        if(isset($_GET["id"]) && intval($_GET["id"]) > 0){
            $id = intval($_GET["id"]);
            //Get one club
            $$club = $this->model->getClub($id);
            require_once PROJ_DIR . "/views/clubs/edit.php";
            return;
        } else {
            die("Id is required");
        }
        
    }
    public function index(){
        //var_dump(PROJ_DIR);
        //require_once PROJ_DIR . "/views/clubs/index.php";
    }
} 