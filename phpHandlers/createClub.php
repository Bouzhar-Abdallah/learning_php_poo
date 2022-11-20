<?php 
    //include '../includes/autoloader.inc.php';
    include '../classes/clubscontr.class.php';
    $nom= $_POST['nom'];
    $description= $_POST['description'];
    $datecreation= $_POST['datecreation'];
    $logo= $_POST['logo'];

    $clubObj = new ClubsContr();
    $clubObj->createClub($nom,$description,$datecreation,$logo);
    header('Location: ../admin.php');
    

