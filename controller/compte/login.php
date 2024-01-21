<?php
require_once '../../crud/Crud_account.php';

session_start();
if (isset($_POST['btn'])) {
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $crud = new CRUD();
    $result = $crud->Login($email, $mdp);
    if ($result != null) {
        $_SESSION['email'] = $email;
        $_SESSION['type'] = $result[5];
        header('location:../../index.php');
    } else {
        echo "Mot de passe erroné , vérifiez vos données.";
        $_SESSION['error'] = "Mot de passe erroné , vérifiez vos données.";
        header('location:../../login.php');
    }
}
