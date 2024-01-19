<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/style.css">
  <link rel="stylesheet" href="../../assets/mestickets.css">
</head>

<body style="background: #F0F0F0;" onload="table()">
  <nav class="nav">
    <img class="logo" src="../../assets/test.png" />
    <ul class="nav-list">
      <li class="list">
        <a href="NouveauTicket.php"><img src="../../assets\plus.png" /><span>Nouveau Ticket</span></a>
      </li>
      <li class="list active">
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
    <h2>Mes Tickets</h2>
    <a class="img-icon" href="../Client/NouveauTicket.php">
      <img class="icon1" src="../../assets\ticketicon.png" />
      <img class="icon2" src="../../assets\plus.png" />
    </a>
    <h3>Nous sommes là pour vous aider !</h3>
    <h3>Pour soumettre un autre ticket </h3>
    <h3> reviendrons vers vous bientôt.</h3>
    <div class="search-bar">
      <input type="text" placeholder="Recherche..." />
      <button><i class="fas fa-search"></i></button>
    </div>
    <div class="detail">
      <div class="detail1">
        <span class="total"><span>320 Total</span> , Procéder a leur résolution </span>
        <select class="periode-select" name="" id="">
          <option value="">Periode</option>
          <option value="">periode1</option>
        </select>
        <select class="statut-select" name="" id="">
          <option value="">Statut</option>
          <option value="">statut1</option>
        </select>
      </div>
      <div class="detail2">
        <div class="fait">
          <span class="number"><span>120</span> <i class="fa-regular fa-circle-check"></i></span>
          <span class="text">Fait</span>
        </div>
        <div class="en-cours">
          <span class="number"><span>120</span> <i class="fa-regular fa-clock"></i></span>
          <span class="text">En cours</span>
        </div>
      </div>
    </div>
    <div class="info" id="table">

    </div>
  </div>
  <script>
    function table() {
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("table").innerHTML = this.responseText;
      }
      xhttp.open("GET", "/controller/gettickets.php");
      xhttp.send();

    }
    setInterval(table, 60000);
  </script>
</body>

</html>