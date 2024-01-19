<?php
require_once "../model/ticket.php";
$ticket = new Ticket();
require_once "../model/crudTickets.php";
$crud = new CrudTicket();
$table = $crud->getTickets();
?>
<table border="1">
    <tr>
        <th>Numéro de ticket</th>
        <th>Sujet</th>
        <th>Description</th>
        <th>Statut</th>
    </tr>
    <?php
    foreach ($table as $row) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "</tr>";
    }
    ?>
</table>