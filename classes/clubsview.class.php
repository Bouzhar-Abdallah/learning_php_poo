<?php

class ClubsView extends Clubs {

    public function showUser($nom){
        $results = $this->getClub($nom);
        echo "club name:".$results[0]['nom']." ".$results[0]['membres'];
    }
}