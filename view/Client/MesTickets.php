<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="../../assets/style.css">
  <link rel="stylesheet" href="../../assets/mestickets.css">
  <style>
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-option {
      padding: 12px 16px;
      display: block;
      text-decoration: none;
      color: #333;
    }

    .dropdown-option:hover {
      background-color: #ddd;
    }

    .period:hover .period-dropdown-content,
    .statut:hover .statut-dropdown-content {
      display: block;
    }
  </style>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var periodDropdown = document.querySelector(".period-dropdown-content");
      var statutDropdown = document.querySelector(".statut-dropdown-content");

      document.querySelector(".fa-chevron-down.period").addEventListener("click", function() {
        periodDropdown.style.display = "block";
      });

      document.querySelector(".fa-chevron-down.period").addEventListener("mouseleave", function() {
        periodDropdown.style.display = "none";
      });

      document.querySelector(".fa-chevron-down.statut").addEventListener("mouseenter", function() {
        statutDropdown.style.display = "block";
      });
      document.querySelector(".fa-chevron-down.statut").addEventListener("mouseleave", function() {
        statutDropdown.style.display = "none";
      });

      // Handle Période option click
      document.querySelectorAll(".period-dropdown-option").forEach(function(option) {
        option.addEventListener("click", function() {
          console.log("Selected Période Option: " + option.textContent);
          periodDropdown.style.display = "none";
        });
      });

      // Handle Statut option click
      document.querySelectorAll(".statut-dropdown-option").forEach(function(option) {
        option.addEventListener("click", function() {
          console.log("Selected Statut Option: " + option.textContent);
          statutDropdown.style.display = "none";
        });
      });
    });
  </script>
</head>

<body style="background: #F0F0F0;">
  <nav class="nav">
    <img class="logo" src="../../assets/test.png" />
    <label class="burger" for="burger">
      <input type="checkbox" id="burger">
      <span></span>
      <span></span>
      <span></span>
    </label>
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
    <ul class="nav-window" id="nav-window">
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
      <img  class="icon2" src="../../assets\plus.png" />
    </a>
    <h3>Nous sommes là pour vous aider !</h3>
    <h3>Pour soumettre un autre ticket </h3><h3> reviendrons vers vous bientôt.</h3>
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
    <div class="info">
      <table border="1">
        <tr>
          <th>Numéro de ticket</th>
          <th>Sujet</th>
          <th>Description</th>
          <th>Statut</th>
        </tr>
      </table>
    </div>
  </div>

  <script src="../../assets/nav.js
  ">
  </script>
</body>

</html>