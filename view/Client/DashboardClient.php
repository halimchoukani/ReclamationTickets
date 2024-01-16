<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client</title>
  <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
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
      <li class="list">
        <a href="MesTickets.php"><img src="../../assets\ticketicon.png" /><span>Mes TICKETS</span></a>
      </li>
      <li class="list active">
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
      <li class="list">
        <a href="MesTickets.php"><img src="../../assets\ticketicon.png" /><span>Mes TICKETS</span></a>
      </li>
      <li class="list active">
        <a href="DashboardClient.php"><img src="../../assets\moncompteicon.png" /><span>Mon COMPTE</span></a>
      </li>
      <li class="list">
        <a href=""><img src="../../assets\deconnexionicon.png" /><span>Déconnexion</span></a>
      </li>
    </ul>
  </nav>
  <script>
    toggle = document.getElementById("burger");
    nav = document.getElementById("nav-window");
    toggle.addEventListener("click", () => {
      if (nav.style.display == "flex") {
        nav.style.display = "none";
      } else {
        nav.style.display = "flex";
      }
    });
  </script>
</body>

</html>