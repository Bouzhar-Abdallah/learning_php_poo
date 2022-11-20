<?php

define("PROJ_DIR", dirname(__FILE__));
//define("PROJ_PATH", path(__FILE__));
include './classes/ClubsContr.class.php';



if(isset($_GET['c'])){
   
    if($_GET['c'] === "Clubs"){

        $clubCtl = new ClubsContr();
        if(isset($_GET['a'])){
            if($_GET['a'] === "create"){
                $clubCtl->createClub();
                return;
            }
            if($_GET['a'] === "list"){
                $clubCtl->listClubs();
                return;
            }
            if($_GET['a'] === "edit"){
                $clubCtl->editClub();
                return;
            }
        }  
        
        $clubCtl->index();
        return;
    }
}

echo "hello";