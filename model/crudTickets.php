<?php
require_once "../config/connection.php";
require_once "ticket.php";
class CrudTicket
{
    public $pdo;
    public $db;
    public function __construct()
    {
        $this->db = new connection();
        $this->pdo = $this->db->getConnection();
    }
    public function CreerTicket($ticket)
    {
        $datenow = date("Y-m-d H:i:s");
        $req = "INSERT INTO ticket VALUES({$datenow},{$ticket->contact},{$ticket->demande},{},{},{},{},{},{});";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
    public function getAllImmobilier()
    {
        $req = "SELECT * FROM immobilier";
        $stmt = $this->pdo->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_NUM);
    }
    public function getImmobilier($reference)
    {
        $req = "SELECT * FROM immobilier WHERE reference={$reference}";
        $stmt = $this->pdo->query($req);
        return $stmt->fetch();
    }
    public function updateImmobilier($immobilier)
    {
        $req = "UPDATE immobilier SET proprietaire='{$immobilier->getProprietaire()}',
        localite='{$immobilier->getLocalite()}',
        nbpiece={$immobilier->getNbpiece()},
        domaineUsage='{$immobilier->getDomaineUsage()}',
        Nature='{$immobilier->getNature()}',
        nbEtage={$immobilier->getNbEtage()},
        surface={$immobilier->getSurface()} WHERE reference={$immobilier->getReference()}";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
    public function deleteImmobilier($reference)
    {
        $req = "DELETE FROM immobilier WHERE reference={$reference}";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
}
