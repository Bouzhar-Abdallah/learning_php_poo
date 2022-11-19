
<?php 
    include_once '../classes/test.class.php';
    
    $nom = $_POST["nom"];
    $membres = $_POST["membres"];
    $description= $_POST["description"];
    

    $testObj = new Test();
    $testObj->setUsersStmt($nom,$membres,$description);
    
?>

