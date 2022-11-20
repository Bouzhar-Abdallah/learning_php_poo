<?php
require_once PROJ_DIR . "/views/header.php";
?>
<link rel="stylesheet" href="views/css/styles.css">
<div class="main-container">
        
        <div class="clubs">

            <div class="title">
              <h3>Clubs</h3>
              <a href="?c=Clubs&a=newClubForm">
                <svg class="add-button" width="512px" height="512px" viewBox="-32 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>
              </a>            
            </div>
            <div class="footer">
                <button class="ajouter">ajouter</button>
                <button class="supprimer">supprimer</button>
                <button class="modifier">modifier</button>
            </div>

            <div class="club_info">
                <?php foreach($list as $key=>$value){ ?>
                    <a href="?c=Clubs&a=edit&id=<?php echo $value["id"]; ?>">
                    <div class="club" role="button">
                        <div class="infos">
                            <h4 class="club_name"> <?php echo $value["nom"]; ?></h4>
                            <p class="members">members: 16</p>
                        </div>
                        <img src="" alt="" class="logo">
                    </div>
                    </a>
                <?php } ?>
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
<?php
require_once PROJ_DIR . "/views/footer.php";
?>