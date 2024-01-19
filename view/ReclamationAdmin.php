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
                <a href="NouveauTicket.php"><img src="../../assets\apercu.png" /><span>APERCU</span></a>
            </li>
            <li class="list active">
                <a href="ReclamatioAdmin.php"><img src="../../assets\ticketicon.png" /><span>TICKETS</span></a>
            </li>
            <li class="list">
                <a href="DashboardClient.php"><img src="../../assets\moncompteicon.png" /><span>COMPTE</span></a>
            </li>
            <li class="list">
                <a href=""><img src="../../assets\deconnexionicon.png" /><span>Déconnexion</span></a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <h2>Les Reclamations</h2>
        <a class="img-icon">
            <img class="icon1" src="../../assets\ticketicon.png" />
            
        </a>
        <div class="search-bar">
            <input type="text" placeholder="Recherche..." />
            <button><i class="fas fa-search"></i></button>
        </div>
        <div id="container">

        </div>
        


    </div>
    <script>
        function table() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("container").innerHTML = this.responseText;
            }
            xhttp.open("GET", "../controller/gettickets.php");
            xhttp.send();

        }
        setInterval(table, 600);
    </script>
</body>

</html>