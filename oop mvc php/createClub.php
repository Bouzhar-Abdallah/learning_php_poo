<?php 
    include '../includes/autoloader.inc.php';

    $nom= $_POST['nom'];
    $description= $_POST['description'];
    $datecreation= $_POST['datecreation'];
    $logo= $_POST['logo'];

    $clubObj = new UsersContr;
    $clubObj->createUser($nom,$description,$datecreation,$logo);