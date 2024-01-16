<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
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

      // Show Période dropdown on hover
      document.querySelector(".fa-chevron-down.period").addEventListener("mouseenter", function() {
        periodDropdown.style.display = "block";
      });

      // Hide Période dropdown when mouse leaves
      document.querySelector(".fa-chevron-down.period").addEventListener("mouseleave", function() {
        periodDropdown.style.display = "none";
      });

      // Show Statut dropdown on hover
      document.querySelector(".fa-chevron-down.statut").addEventListener("mouseenter", function() {
        statutDropdown.style.display = "block";
      });

      // Hide Statut dropdown when mouse leaves
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
  <?php include 'NavBarClient.php'; ?>
  <div style="width: 592px; height: 185px; left: 406px; top: 152px; position: absolute">
    <div style="width: 592px; height: 82px; left: 0px; top: 0px; position: absolute; text-align: center; color: black; font-size: 35px; font-family: Inter; font-weight: 800; word-wrap: break-word">Mes Tickets</div>
    <div style="width: 575px; height: 131px; left: 11px; top: 54px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Nous sommes là pour vous aider ! <br />Pour soumettre un autre ticket<br /><br />Nous reviendrons vers vous bientôt.</div>
  </div>
  <div style="width: 592px; height: 185px; left: 406px; top: 152px; position: absolute">
    <div style="width: 592px; height: 82px; left: 0px; top: 0px; position: absolute; text-align: center; color: black; font-size: 35px; font-family: Inter; font-weight: 800; word-wrap: break-word">Mes Tickets</div>
    <div style="width: 575px; height: 131px; left: 11px; top: 54px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Nous sommes là pour vous aider ! <br />Pour soumettre un autre ticket<br /><br />Nous reviendrons vers vous bientôt.</div>
  </div>
  <div style="width: 1196px; height: 438px; left: 98px; top: 540px; position: absolute">
    <div style="width: 1196px; height: 0px; left: 0px; top: 42.12px; position: absolute; border: 1px #C0C0C0 solid"></div>
    <div style="width: 1195.97px; height: 0px; left: 0px; top: 0px; position: absolute; border: 1px #C0C0C0 solid"></div>
    <div style="width: 161px; height: 23px; left: 39px; top: 8px; position: absolute; color: black; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Numéro de ticket</div>
    <div style="width: 46px; height: 23px; left: 365px; top: 8px; position: absolute; color: black; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Sujet</div>
    <div style="width: 108px; height: 23px; left: 717px; top: 8px; position: absolute; color: black; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Description</div>
    <div style="width: 58px; height: 25px; left: 1072px; top: 7px; position: absolute; color: black; font-size: 18px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Statut</div>
    <div style="width: 438px; height: 0px; left: 239px; top: 438px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px #C0C0C0 solid"></div>
    <div style="width: 438px; height: 0px; left: 0px; top: 438px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px #C0C0C0 solid"></div>
    <div style="width: 438px; height: 0px; left: 536px; top: 438px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px #C0C0C0 solid"></div>
    <div style="width: 438px; height: 0px; left: 1005px; top: 438px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px #C0C0C0 solid"></div>
    <div style="width: 438px; height: 0px; left: 1196px; top: 438px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px #C0C0C0 solid"></div>
  </div>
  <div style="width: 507px; height: 52.94px; left: 787px; top: 376px; position: absolute; background: #EDEDED; border-radius: 15px"></div>

  <div style="width: 128px; height: 22px; left: 805px; top: 391.53px; position: absolute; color: #B3B3B3; font-size: 20px; font-family: Inter; font-weight: 800; word-wrap: break-word">Recherche...</div>

  <div style="width: 37px; height: 37px; left: 1244px; top: 383.53px; position: absolute"></div>
  <div style="width: 26.96px; height: 26.96px; left: 1248.62px; top: 388.15px; position: absolute;"><i class="fa-solid fa-magnifying-glass"></i></div>
  <div style="width: 1188px; height: 61px; left: 98px; top: 473px; position: absolute">
    <div style="width: 48px; height: 35px; left: 939px; top: 1px; position: absolute; color: black; font-size: 35px; font-family: Inter; font-weight: 800; word-wrap: break-word">02</div>
    <div style="width: 45px; height: 35px; left: 1115px; top: 0px; position: absolute; color: black; font-size: 35px; font-family: Inter; font-weight: 800; word-wrap: break-word">01</div>
    <img style="width: 28px; height: 28px; left: 1156px; top: 5px; position: absolute" src="../../assets\Time.png" />
    <img style="width: 26px; height: 26px; left: 980px; top: 9px; position: absolute" src="../../assets\CheckMark.png" />
    <div style="width: 28px; height: 22px; left: 962px; top: 39px; position: absolute; color: #F79422; font-size: 15px; font-family: Inter; font-weight: 200; word-wrap: break-word">Fait</div>
    <div style="width: 72px; height: 22px; left: 1115px; top: 39px; position: absolute; color: #F79422; font-size: 15px; font-family: Inter; font-weight: 200; word-wrap: break-word">En attente</div>
    <div style="width: 342px; height: 18px; left: 0px; top: 0px; position: absolute"><span style="color: black; font-size: 20px; font-family: Inter; font-weight: 800; word-wrap: break-word">320 Total, </span><span style="color: black; font-size: 20px; font-family: Inter; font-weight: 200; word-wrap: break-word">procéder à leur résolution</span></div>
    <div style="width: 86px; height: 25px; left: 360px; top: 0px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Inter; font-weight: 800; word-wrap: break-word ">Période<i class="fas fa-chevron-down period" style="position: absolute; left: 85px; top:2px">
        <div class="dropdown-content period-dropdown-content">
          <a href="#" class="dropdown-option period-dropdown-option">last week</a>
          <a href="#" class="dropdown-option period-dropdown-option">last month</a>
          <a href="#" class="dropdown-option period-dropdown-option">last year</a>
        </div>
      </i>
    </div>
    <div style="width: 70px; height: 25px; left: 489px; top: 0px; position: absolute; text-align: center; color: black; font-size: 20px; font-family: Inter; font-weight: 800; word-wrap: break-word">Statut<i class="fas fa-chevron-down statut" style="position: absolute; left: 74px; top:2px">
        <div class="dropdown-content statut-dropdown-content">
          <a href="#" class="dropdown-option statut-dropdown-option">done</a>
          <a href="#" class="dropdown-option statut-dropdown-option">in progress</a>
        </div>
      </i>
    </div>

  </div>
  <div style="width: 1px; height: 0px; left: 565px; top: 4px; position: absolute;"><i class="fas fa-chevron-down"></i></div>
  <div style="width: 1px; height: 0px; left: 450px; top: 4px; position: absolute;"><i class="fas fa-chevron-down"></i></div>
  </div>

  </div>
  </div>
  </div>
</body>

</html>