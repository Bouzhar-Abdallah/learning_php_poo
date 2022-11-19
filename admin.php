<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://kit.fontawesome.com/a26b51a86d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>administration</title>
</head>
<body>
   <?php include './includes/navbar.php' ?>
    <div class="main-container">
        
        <div class="clubs">

            <div class="title">
              <h3>Clubs</h3>
              <a href="newclub.php">
                <svg class="add-button" width="512px" height="512px" viewBox="-32 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>
              </a>            
            </div>
            <div class="footer">
                <button class="ajouter">ajouter</button>
                <button class="supprimer">supprimer</button>
                <button class="modifier">modifier</button>
            </div>

            <div class="club_info">
                <div class="club" role="button">
                    <div class="infos">
                        <h4 class="club_name">Club x</h4>
                        <p class="members">members: 16</p>
                    </div>
                    <img src="" alt="" class="logo">
                </div>
            </div>
            
        </div>
        <div class="right">
        <div class="calender">
            <h3>Calender</h3>
        </div>  
        <div class="todo">
            <div class="header">
                <div class="add-todo">
                    <input type="text" placeholder="To Do">
                    <svg class="add-button" width="512px" height="512px" viewBox="-32 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>
                </div>
            </div>
            <ul >
                <li class="task">
                        <p class="task-test">test</p>
                        <i class="fa-solid fa-xmark"></i>
                </li>
                <li class="task">
                        <p class="task-test">test</p>
                        <i class="fa-solid fa-xmark"></i>
                </li>
                <li class="task">
                        <p class="task-test">test</p>
                        <i class="fa-solid fa-xmark"></i>
                </li>
                <li class="task">
                        <p class="task-test">test</p>
                        <i class="fa-solid fa-xmark"></i>
                </li>
                <li class="task">
                        <p class="task-test">test</p>
                        <i class="fa-solid fa-xmark"></i>
                </li>
            </ul>
        </div>
    </div>
    </div>
</body>
</html>
<script src="./script.js"></script>