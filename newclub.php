<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./clubs.css">
    <script src="https://kit.fontawesome.com/a26b51a86d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <?php include './includes/navbar.php' ?>
    
    <div class="main-container">
        <form action="./phphandlers/createClub.php" method="post">
            <label for="nom">Nom du club:</label>
            <input type="text" name="nom">
            <label for="description">description :</label>
            <input type="text" name="description">
            <label for="datecreation">date de creation :</label>
            <input type="text" name="datecreation">
            <input type="file" id="myFile" name="logo">
            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>