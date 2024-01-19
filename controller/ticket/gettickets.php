<?php
require_once "../../model/ticket.php";
$ticket = new Ticket();
require_once "../../crud/crudTickets.php";
$crud = new CrudTicket();
$table = $crud->getTickets();
$encour = $crud->getByStatutNum("enCours");
$fait = $crud->getByStatutNum("Cloture");
?>

<div class="detail">
      <div class="detail1">
        <span class="total"><span><?php echo $fait+$encour;?> Total</span> , Procéder a leur résolution </span>
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
          <span class="number"><span><?php echo $fait; ?></span> <i class="fa-regular fa-circle-check"></i></span>
          <span class="text">Fait</span>
        </div>
        <div class="en-cours">
          <span class="number"><span><?php echo $encour;?></span> <i class="fa-regular fa-clock"></i></span>
          <span class="text">En cours</span>
        </div>
      </div>
    </div>
<table border="1">
    <tr>
        <th>Numéro de ticket</th>
        <th>Date</th>
        <th>Heure</th>
        <th>Client</th>
        <th>Contact</th>
        <th>Date</th>
        <th>Date</th>
        <th>Description</th>
        <th>Statut</th>
    </tr>
    <?php
    foreach ($table as $row) {
        echo "<tr>";
        echo "<td>" . $row[6] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "</tr>";
    }
    ?>
</table>