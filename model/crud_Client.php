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
function update($email){
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
    function ajoutClient(appartement $a)
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

    }}