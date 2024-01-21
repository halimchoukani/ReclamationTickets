<?php
session_start();

require_once '../../crud/Crud_account.php';
require_once '../../crud/crud_code.php';

$_SESSION["error"] = "";

if (isset($_POST["btn"])) {
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $cmdp = htmlspecialchars($_POST['cmdp']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $tel = htmlspecialchars($_POST['tel']);
    $noms = htmlspecialchars($_POST['noms']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $genre = htmlspecialchars($_POST['flexRadioDefault']);
    if ($email == "" || $mdp == "" || $cmdp == "" || $nom == "" || $prenom == "" || $tel == "" || $noms == "" || $adresse == "" || $genre == "") {
        $_SESSION["error"] = "Veuillez remplir tous les champs";
    } else {
        if ($mdp != $cmdp) {
            $_SESSION["error"] = "Mot de passe non identique";
        } else {
            $crud = new CRUD();
            $result = $crud->Register($nom, $prenom, $email, $tel, $mdp, "client", "null", "enCours", $genre, $noms, $tel, $adresse);
            if ($genre == "male") {
                $genre = "Monsieur";
            } else {
                $genre = "Madame";
            }
            if ($result == true) {
                $code = new Crud_code();
                $token = $code->generateCode($email);
                $code->sendCode($email, 'Code de confirmation de votre compte', 'Bonjour ' . $genre . ' ' . $nom . ' ' . $prenom . " <br> C'est votre lien pour vérifier votre compte: <a href='http://localhost:4000/verification.php?token=" . $token . "'>Cliquez Ici</a>");
                $_SESSION["error"] = "Compte créé avec succès ! Nous enverrons un email de confirmation dans les plus brefs délais";
            } else {
                $_SESSION["error"] = "La création du compte a échoué. Veuillez vérifier vos informations.";
            }
        }
    }
}
header("Location: ../../register.php");
