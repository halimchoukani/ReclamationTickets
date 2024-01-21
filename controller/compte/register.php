<?php
require_once '../../crud/Crud_account.php';
if (isset($_POST["btn"])) {
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $tel = htmlspecialchars($_POST['tel']);
    $noms = htmlspecialchars($_POST['noms']);
    $tel = htmlspecialchars($_POST['tel']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $genre = htmlspecialchars($_POST['flexRadioDefault']);
    $crud = new CRUD();
    $result = $crud->Register($nom, $prenom, $email, $tel, $mdp, "client", "null", "null", $genre, $noms, $tel, $adresse);
    if ($result) {
        header('location:../../login.php');
    } else {
        echo "Email existe déja , vérifiez vos données.";
    }
}
