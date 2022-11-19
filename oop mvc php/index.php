<?php 
    include '../includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <?php 
        $person1 = new Person("abdallah",34);
        $house1 = new House('test',45);
        echo $person1->name;
        echo '<br>';
        echo $house1->name;
    ?>
</body>
</html>