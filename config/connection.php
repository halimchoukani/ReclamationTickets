<?php
class connection
{
    public function getConnection()
    {
        $dbname = "mysql:host=localhost;dbname=reclamation";
        $user = "zimys2024";
        $pass = "isetrades2024";
        $db = new PDO($dbname, $user, $pass);
        return $db;
    }
}