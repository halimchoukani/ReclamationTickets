<?php
require_once('../config/connexion.php');
class CRUD
{
    protected $pdo;
    function __construct()
    {
        $obj = new connexion;
        $this->pdo = $obj->getConnexion();
       
    }
    
    function Login($email)
    {

        $sql = "select mdp from account where email=$email;";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
     
   
    function update($ref){
        $a = $crud->RecupererApp($ref);
        $prop = $a->getProp();
        $localite = $a->getLocalite();
        $domaineUsage = $a->getDomaineUsage();
        $nbPieces = $a->getNbPieces();
        $surface = $a->getSurface();
        $surfC= $a->getSurfaceEspaceCommun();
        $sql = "update immobilier set ref=$ref, proprietere='$prop',  localite='$localite',  nbPieces=$nbPieces, domaineUsage='$domaineUsage',Nature='$nature', nbEtage=null,surfaceCommune='$surfC' WHERE ref=$ref";

        $res = $this->pdo->exec($sql);
        return $res;

    }
    function ajouteApp(appartement $a)
    {
        $prop = $a->getProp();
        $localite = $a->getLocalite();
        $domaineUsage = $a->getDomaineUsage();
        $nbPieces = $a->getNbPieces();
        $surface = $a->getSurface();
        $surfC= $a->getSurfaceEspaceCommun();
        $sql = "insert into immobilier values(null,'$prop','$localite',$nbPieces,'$domaineUsage','Appartement',null,'$surfC');";
        $res = $this->pdo->exec($sql);
        return $res;

    }
    function Afficher($email)
    {

        $sql = "select *  from account where email=$email;";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function SupprimerApp($email)
    {
        $sql = "delete from account where email=$email;";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    
    
    
}