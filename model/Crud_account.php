<?php
require_once('../config/connexion.php');
class CRUD
{   protected $type;
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
     
   

    function Afficher($email)
    {

        $sql = "select *  from account where email=$email and type=$type;";
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