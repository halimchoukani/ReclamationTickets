<?php
require_once "../../model/ticket.php";
$ticket = new Ticket();
require_once "../../crud/crudTickets.php";
$crud = new CrudTicket();
$table = $crud->getTickets();
$encour = $crud->getByStatutNum("enCours");
$fait = $crud->getByStatutNum("Cloture");
?>
<thead>
  <tr>
    <th>Numéro de ticket</th>
    <th>Date&Heure</th>
    <th>Demande</th>
    <th>Client</th>
    <th>Diagnostic</th>
    <th>Contact</th>
    <th>Categorie</th>
    <th>Priorité</th>
    <th>Statut</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
  <?php
  foreach ($table as $row) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "<td>" . $row[7] . "</td>";
    if ($row[8] == "enCours") {
      echo "<td><span class='badge badge-danger'>" . $row[8] . "</span></td>";
    } else {
      echo "<td><span class='badge badge-success'>" . $row[8] . "</span></td>";
    }
<<<<<<< HEAD
    if ($row[8] == "enCours") {
      echo "<td><a href='../../cloture.php?id=" . $row[0] . "'><button>Cloturer</button></a></td>";
=======
    if ($row[8] == "enCours" && ($_SESSION["type"] == "admin" || $_SESSION["type"] == "supervisor")) {
      echo "<td><a href='controller/ticket/cloture.php?id=" . $row[0] . "'><button class='btn btn-primary'>Cloturer</button></a></td>";
>>>>>>> 1347168b533cfa567427db81b8dd44ab0226b3e4
    }
    echo "</tr>";
  }
  ?>
  </tbody>
</body>
</html>
