<?php

class ClubsContr extends Clubs {
    public function createUser($nom,$description,$datecreation,$logo){
        $this->setClub($nom,$description,$datecreation,$logo);
    }
}