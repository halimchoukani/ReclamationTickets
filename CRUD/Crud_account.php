<?php
require_once('../../config/connection.php');

class CRUD
{
    protected $type;
    protected $pdo;
    function __construct()
    {
        $obj = new connection();
        $this->pdo = $obj->getConnection();
    }

    function Login($email, $pass)
    {

        $sql = "select * from account where email='$email' and mdp='$pass';";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }



    function Afficher($email)
    {

        $sql = "select *  from account where email=$email and type='$this->type';";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function SupprimerApp($email)
    {
        $sql = "delete from account where email=$email;";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function Lister()
    {

        $sql = "select *  from  account where type='$this->type';";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
}