<?php
session_start();
if(isset($_SESSION['user_id'])) { //redirige le user si déja connecté
    header("Location: ../mainPages/interSave.php");
    exit();
}


if (isset($_GET['error'])) {
    if ($_GET['error'] == 'invalid_input') {
        $message = "Les champs sont vides ou l'email n'a pas le bon format.";
    }
    elseif ($_GET['error'] == 'email_not_found') {
        $message = "L'email n'existe pas.";
    }
    elseif ($_GET['error'] == 'invalid_password') {
        $message = "Le mot de passe est incorrect.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion | InterSave</title>
        <link rel="stylesheet" href="../styles/styleAccount.css">
        <link rel="icon" href="../img/smallLogin.png" type="image/png">
    </head>
    <body>
        <section class="container">
            <div class="img">
                <img src="../img/login.png" alt="Login Image" class="loginImage">
            </div>
            <div class="mainForm">
                <h1 class="title">Connexion</h1>
                <?php if (isset($message)): ?>
                    <p class="error" style="color: red"><?php echo htmlspecialchars($message); ?></p>
                <?php endif; ?>
                <form action="../BDD/loginBDD.php" method="post" class="form">
                    <input type="email" name="email" placeholder="Email" required class="input">
                    <input type="password" name="password" placeholder="Mot de passe" required class="input">
                    <button type="submit" class="button">Se connecter</button>
                </form>
                <p class="description">Vous n'avez pas encore de compte ?<br><span class="color2TitleMain"><a href="../mainPages/register.php">Inscrivez-vous !</a></span></p>
            </div>
        </section>
    </body>
</html>