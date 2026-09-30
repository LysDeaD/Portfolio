<?php
session_start();

if(isset($_SESSION['user_id'])) { //redirige le user si déja connecté
    header("Location: ../mainPages/interSave.php");
    exit();
}

if (isset($_GET['error'])) {
    if ($_GET['error'] == 'invalid_email') {
        $message = "Les emails jettable ne sont pas autorisés.";
    }
    elseif ($_GET['error'] == 'invalid_input') {
        $message = "L'email n'a pas le bon format ou les champs sont vides.";
    }
    elseif ($_GET['error'] == 'invalid_password') {
        $message = "Les mdp ne sont pas identiques.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription | InterSave</title>
        <link rel="stylesheet" href="../styles/styleAccount.css">
        <link rel="icon" href="../img/smallLogin.png" type="image/png">
    </head>
    <body>
        <section class="container">
            <div class="img">
                <img src="../img/login.png" alt="Login Image" class="loginImage">
            </div>
            <div class="mainForm">
                <h1 class="title">S'inscrire</h1>
                <?php if (isset($message)): ?>
                    <p class="error" style="color: red"><?php echo htmlspecialchars($message); ?></p>
                <?php endif; ?>
                <form method="post" action="../BDD/registerBDD.php" class="form" >
                    <input type="text" name="username" placeholder="Nom d'utilisateur" required class="input">
                    <input type="email" name="email" placeholder="Email" required class="input">
                    <input type="password" name="password" placeholder="Mot de passe" required class="input">
                    <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required class="input">
                    <button type="submit" class="button">S'inscrire</button>
                    <p class="description">Vous avez déja un compte ?<br><span class="color2TitleMain"><a href="../mainPages/login.php">Connectez-vous !</a></span></p>
                </form>
            </div>
        </section>
    </body>
</html>