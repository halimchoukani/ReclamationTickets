<?php
require_once('../config/connexion.php');
class CRUD
{
    protected $type='Client';
    protected $pdo;
    function __construct()
    {
        $obj = new connexion;
        $this->pdo = $obj->getConnexion();
       
    }
function update(Compte $c){
        $email = $c->getEmail();
        $nom = $c->getNom();
        $prenom = $c->getPrenom();
        $tel = $c->getTel();
        $mot_de_passe= $c->getMot_de_passe();
        $centre= $c->getCentre();
        $sql = "update compte SET  nom = '$nom', prenom = '$prenom', tel = '$tel',  mot_de_passe = '$mot_de_passe',type='Client', centre = '$centre', WHERE email = '$email'";

        $res = $this->pdo->exec($sql);
        return $res;

    }
    function ajoutClient(Compte $c)
    {
        $email = $c->getEmail();
        $nom = $c->getNom();
        $prenom = $c->getPrenom();
        $tel = $c->getTel();
        $mot_de_passe= $c->getMot_de_passe();
        $centre= $c->getCentre();
        $sql = "insert into compte VALUES ('$email', '$nom', '$prenom', '$tel',null, '$mot_de_passe','Client', '$centre', 'enCours')";
        $res = $this->pdo->exec($sql);
        return $res;

    }}