<?php
session_start();

if ($_SESSION["email"] == null) {
  header("location:login.php");
} else {
  $type = $_SESSION["type"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client</title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/formulaire.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body onscroll="document.querySelector('.nav').classList.add('top');">
  <nav class="nav">
    <img class="logo" src="/assets/image/test.png" />
    <ul class="nav-list">
      <?php
      if ($type == "client") {
        echo '<li class="list">
        <a href="NouveauTicket.php"><img src="/assets/image\plus.png" /><span>Nouveau Ticket</span></a>
        </li>';
      } else {
        echo '<li class="list">
        <a href="apercu.php"><img src="/assets/image\1.png" /><span>Aperçu</span></a>
        </li>';
      }
      ?>
      <li class="list">
        <a href="MesTickets.php"><img src="/assets\image/ticketicon.png" /><span>
            <?php
            if ($type == "client") {
              echo "Mes Tickets";
            } else {
              echo "Tickets";
            }
            ?>
          </span></a>
      </li>
      <li class="list active">
        <a href="DashboardClient.php"><img src="/assets\image/moncompteicon.png" /><span>Mon COMPTE</span></a>
      </li>
      <li class="list">
        <a href="deconnexion.php"><img src="/assets\image/deconnexionicon.png" /><span>Déconnexion</span></a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <h2>Mon Compte</h2>
    <div class="img-icon">
      <img class="icon1" src="/assets\image/moncompteicon.png" />
    </div>
    <h3>Vous pouvez modifier vos informations personnelles</h3>
    <h3>et changer votre mot de passe.</h3>
    <div class="title">
      <h4>Details</h4>
      <div class="bar"></div>
    </div>
    <form action="" class="form">
      <div class="div">
        <label for="">1. Nom : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">2. Prenom : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">3. Email : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">4. Mot de passe : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">5. Confirmer le mot de passe : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">6. Numero de telephone : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">7. Adresse : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">8. Ville : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">9. Pays : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">10. Code postal : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">11. Date de naissance
      </div>
</body>

</html>