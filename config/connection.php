<?php
class connection
{
    public function getConnection()
    {
        $dbname = "mysql:host=localhost;dbname=reclamation";
        $user = "root";
        $pass = "";
        $db = new PDO($dbname, $user, $pass);
        return $db;
    }
}