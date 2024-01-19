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
        $req = "INSERT INTO ticket VALUES({$datenow},{$ticket->getContact()},{$ticket->getDemande()},{$ticket->getDiagnostique()},{$ticket->getCategorie()},{$ticket->getPreorite()},'encour',{null},{null},{null});";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
    // public function getAllTicketsData(){
    //     $req= "Select t.* from ticket t join account a on a.email = t.contact where a.email = '{$_SESSION['email']}'";
    // }
    public function getTickets()
    {
        $req = "SELECT * FROM ticket";
        $stmt = $this->pdo->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_NUM);
    }
    public function getTicketById($reference)
    {
        $req = "SELECT * FROM ticket WHERE reference={$reference}";
        $stmt = $this->pdo->query($req);
        return $stmt->fetch();
    }
    public function getTicketByCat($cat)
    {
        $req = "SELECT * FROM ticket WHERE reference={$cat}";
        $stmt = $this->pdo->query($req);
        return $stmt->fetch();
    }
    public function getByStatut($statut)
    {
        $req = "SELECT * FROM ticket WHERE status='{$statut}';";
        $stmt = $this->pdo->query($req);
        return $stmt->fetch();
    }
    public function getByStatutNum($statut)
    {
        $req = "SELECT count(ticketId) FROM ticket WHERE status='{$statut}';";
        $stmt = $this->pdo->query($req);
        return $stmt->fetch()[0];
    }

    public function supprimerTicket($tickets)
    {
        $req = "DELETE FROM immobilier WHERE reference={$tickets}";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
}
