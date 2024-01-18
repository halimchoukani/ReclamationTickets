<?php
require_once('../config/connexion.php');
class CRUD
{
    protected $type='Technicien';
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
        $sql = "update compte SET  nom = '$nom', prenom = '$prenom', tel = '$tel',  mot_de_passe = '$mot_de_passe',type='Technicien', centre = '$centre', WHERE email = '$email'";
        $res = $this->pdo->exec($sql);
        return $res;

    }
    function ajouteTech(Compte $c)
    {
        $email = $c->getEmail();
        $nom = $c->getNom();
        $prenom = $c->getPrenom();
        $tel = $c->getTel();
        $matricule = $c->getMatricule();
        $mot_de_passe= $c->getMot_de_passe();
        $sql = "insert into compte VALUES ('$email', '$nom', '$prenom', '$tel',null, '$mot_de_passe','Technicien', null, 'Verifie')";
        $res = $this->pdo->exec($sql);
        return $res;

    }}