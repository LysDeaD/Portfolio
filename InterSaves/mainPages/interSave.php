<?php
session_start();

if(!isset($_SESSION['user_id'])) { //redirige le user si pas connecté
    header("Location: ../mainPages/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>InterSave</title>
        <link rel="stylesheet" href="../styles/styleInterSave.css">
        <link rel="icon" href="../img/smallLogin.png" type="image/png">
    </head>

    <body>
        <nav class="navMain">
            <h3 class="brandName"><a href="#">Inter<span class="color2TitleNav">Save</span></a></h3>
            <div class="nav-container">
                <ul>
                    <li><a href="index.html" class="nav-link">Accueil</a></li>
                    <li><a href="about.html" class="nav-link">Comment ça marche ?</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                    <li><a href="social.php" class="nav-link">Social</a></li> 
                </ul>
            </div>
            <a href="../BDD/logoutBDD.php" class="navLink1" style="margin-right: 20px;">Déconnexion</a>
        </nav>

        <div class="container">
            <div class="contentMain">
                <div class="savedGames">
                    <h2>Les jeux prit en charge</h2>
                </div>
                <div class="friendsList">
                    <h2>Vos amis</h2>
                    <ul>
                        <li>Amis 1</li>
                        <li>Amis 2</li>
                        <li>Amis 3</li>
                        <li><a href="social.php">Voir plus</a></li>
                    </ul>
                </div>
            </div>

            <div class="newSaves">
                <h1>Vos saves récentes</h1>
            </div>

            <div class="lateralNav">
                <ul>
                    <li><a href="index.html" class="nav-link">Accueil</a></li>
                    <li><a href="about.html" class="nav-link">Comment ça marche ?</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>