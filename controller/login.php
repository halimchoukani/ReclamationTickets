<?php
require_once '../model/Crud_account.php';
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $crud = new CRUD();
    $result = $crud->Login($email, $mdp);
    if ($result) {
        echo "Bienvenue";

    } else {
        echo "Mot de passe erroné , vérifiez vos données.";    }

}
?>