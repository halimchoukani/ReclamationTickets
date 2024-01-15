<?php
class connection
{
    public function getConnection()
    {
        $dbname = "mysql:host=localhost;dbname=gestion";
        $user = "root";
        $pass = "";
        $db = new PDO($dbname, $user, $pass);
        return $db;
    }
}