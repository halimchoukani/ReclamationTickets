<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../assets/style.css">
  <link rel="stylesheet" href="../../assets/nouveauticket.css">
  <link rel="stylesheet" href="../../assets/formulaire.css">
</head>

<body style="background: #F0F0F0;">
  <nav class="nav">
    <img class="logo" src="../../assets/test.png" />
    <ul class="nav-list">
      <li class="list active">
        <a href="NouveauTicket.php"><img src="../../assets\plus.png" /><span>Nouveau Ticket</span></a>
      </li>
      <li class="list">
        <a href="MesTickets.php"><img src="../../assets\ticketicon.png" /><span>Mes TICKETS</span></a>
      </li>
      <li class="list">
        <a href="DashboardClient.php"><img src="../../assets\moncompteicon.png" /><span>Mon COMPTE</span></a>
      </li>
      <li class="list">
        <a href=""><img src="../../assets\deconnexionicon.png" /><span>Déconnexion</span></a>
      </li>
    </ul>
  </nav>
  <div class="container">
    <h2>CREATION DE NOUVEAU TICKET</h2>
    <div class="img-icon">
      <img class="icon1" src="../../assets\ticketicon.png" />
      <img class="icon2" src="../../assets\plus.png" />
    </div>
    <h3>Nous sommes là pour vous aider !</h3>
    <h3>soumettre un ticket ! Nous reviendrons vers vous bientôt.</h3>
    <div class="title">
      <h4>Details</h4>
      <div class="bar"></div>
    </div>
    <form action="" class="form">
      <div class="div">
        <label for="">1. Choisir la Categorie : </label>
        <select class="input" name="" id="">
          <option value="">Choisir la Categorie</option>
          <option value="">Choisir la Categorie</option>
          <option value="">Choisir la Categorie</option>
          <option value="">Choisir la Categorie</option>
        </select>
      </div>
      <div class="div">
        <label for="">2. Sujet : </label>
        <input type="text" class="input">
      </div>
      <div class="div">
        <label for="">3. Description : </label>
        <textarea name="" class="input" id="" cols="30" rows="10"></textarea>
      </div>
      <button type="submit">Envoyer</button>
    </form>
  </div>
</body>

</html>