<?php

define("PROJ_DIR", dirname(__FILE__));
//define("PROJ_PATH", path(__FILE__));
include './classes/ClubsContr.class.php';

$clubCtl = new ClubsContr();

if(isset($_GET['c'])){
   
    if($_GET['c'] === "Clubs"){

        
        if(isset($_GET['a'])){
            if($_GET['a'] === "newClubForm"){
                $clubCtl->newClubForm();  
               
return;
            }
            if($_GET['a'] === "createNewClub"){
                $clubCtl->createNewClub($_POST["nom"],$_POST["description"],$_POST["datecreation"],$_POST["logo"]);
                
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
} else {
        /* header('Location: ./admin.php'); */
        $clubCtl->listClubs();
       
}

