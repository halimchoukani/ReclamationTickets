<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/formulaire.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body onload="notification()">
    <div class="sign-container">
        <div class="logo">
            <img src="/assets/image/logo.png" alt="logo">
        </div>
        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
        }
        ?>
        <form method="post" action="/controller/compte/login.php" class="form">
            <div class="div">
                <label for="email">Identifiant :</label>
                <input type="email" name="email" id="email" class="input" placeholder="Entrez Votre Email">
            </div>
            <div class="div">
                <label for="pass">Mot de passe :</label>
                <input type="password" name="mdp" id="pass" class="input" placeholder="Entez Votre Mot de Passe">
            </div>
            <button type="submit" name="btn" id="login-button">Valider</button>
        </form>
        <a href="">Mot de passe oublié?</a>
        <div class="bar">
            <div class="line"></div>
            <div class="text">Ou Bien</div>
            <div class="line"></div>
        </div>
        <a href="register.php">Créer un compte</a>
    </div>
    <script>
        function notification() {
            setTimeout(() => {
                document.querySelector('.error').style.display = "none";
                <?php
                $_SESSION['error'] = "";
                ?>
            }, 3000);
        }
    </script>
</body>

</html>