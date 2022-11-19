<?php

class ClubsView extends Clubs {

    public function showClub($nom){
        $results = $this->getClub($nom);
        echo "club name:".$results[0]['nom']." ".$results[0]['membres'];
    }

    public function showClubs(){

    }
}