<?php
require_once("../../CRUD/crudtickets.php");
$crud=new CrudTicket();
if (isset($_POST['diag'])) {
    
}else{
    if(isset($_GET['id'])){
        echo $crud->getDiagByid($_GET['id']);
    }

}


?>