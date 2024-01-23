<?php
require_once("../../CRUD/crudtickets.php");
$crud=new CrudTicket();
if (isset($_POST['diag'])) { 
    header("location:../../tickets.php");
}else{
        echo $crud->getDiagByid($_GET['id']);
}
?>