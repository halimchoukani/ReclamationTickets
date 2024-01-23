<?php
session_start();

require_once '../../crud/Crud_account.php';
require_once '../../crud/crud_code.php';

$_SESSION["error"] = "";
$_SESSION["error-type"] = "";

if (isset($_POST["btn"])) {
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $cmdp = htmlspecialchars($_POST['cmdp']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $tel = htmlspecialchars($_POST['tel']);
    $tels = htmlspecialchars($_POST['nums']);
    $noms = htmlspecialchars($_POST['noms']);
    $adresse = htmlspecialchars($_POST['adresse']);
    if(isset($_post['matricule'])){
        $matricule = htmlspecialchars($_POST['matricule']);
        $type = 'admin';
    }else{
        $matricule = 'null';
        $type = 'client';
    }
    $genre = htmlspecialchars($_POST['flexRadioDefault']);
    if ($email == "" || $mdp == "" || $cmdp == "" || $nom == "" || $prenom == "" || $tel == "" || $noms == "" || $adresse == "" || $genre == "" || $tels == "") {
        $_SESSION["error"] = "Veuillez remplir tous les champs";
        $_SESSION["error-type"] = "bg-danger text-white";
    } else {
        if ($mdp != $cmdp) {
            $_SESSION["error"] = "Mot de passe non identique";
            $_SESSION["error-type"] = "bg-danger text-white";
        } else {
            $crud = new CRUD();
            if($type == 'admin'){
                $result = $crud->Register($nom, $prenom, $email, $tel, $mdp, "client", "null", "enCours", $genre, $noms, $tels, $adresse);
            }else{
                $result = $crud->Register($nom, $prenom, $email, $tel, $mdp, "client", "null", "enCours", $genre, $noms, $tels, $adresse);
            }
            
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
                $_SESSION["error-type"] = "bg-success text-white";
            } else {
                $_SESSION["error"] = "La création du compte a échoué. Veuillez vérifier vos informations.";
                $_SESSION["error-type"] = "bg-danger text-white";
            }
        }
    }
}
header("Location: ../../register.php");
