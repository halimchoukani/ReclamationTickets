<?php
require_once('../../config/connection.php');
require_once "../../model/code.php";
require_once "crud_account.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Crud_code
{
    protected $pdo;
    function __construct()
    {
        $obj = new connection();
        $this->pdo = $obj->getConnection();
    }
    public function generateCode($length = 5)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, $charactersLength - 1)];
        }
        $date_debut = date("Y-m-d h:i:s");
        $date_fin = date("Y-m-d H:i:s", strtotime("+60 minutes"));
        $req = "insert into codeverif values('$code','$date_debut','$date_fin')";
        $res = $this->pdo->exec($req);
        if ($res === false) {
            return $this->generateCode($length);
        } else {
            return $code;
        }
    }
    public function sendCode($email)
    {

        $account = new CRUD();
        $nom = $account->getNomPrenomGenre($email)[0];
        $prenom = $account->getNomPrenomGenre($email)[1];
        $genre = $account->getNomPrenomGenre($email)[2];
        if ($genre == "male") {
            $genre = "Monsieur";
        } else {
            $genre = "Madame";
        }
        $token = $this->generateCode();
        require "../../vendor/autoload.php";

        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'halimchoukani3@gmail.com';
            $mail->Password   = 'sjnk dfmp hbqx ybzq'; // Use a secure method for storing this
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use ENCRYPTION_SMTPS for port 465
            $mail->Port       = 465; // Use 587 if you are using ENCRYPTION_STARTTLS
            $mail->SMTPDebug = 0;
            $mail->setFrom('halimchoukani3@gmail.com', 'Helloworld');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Code de confirmation de votre compte';
            $mail->Body = 'Bonjour ' . $genre . ' ' . $nom . ' ' . $prenom . " <br> C'est votre lien pour vérifier votre compte: <a href='http://localhost:4000/verification.php?token=" . $token . "'>Cliquez Ici</a>";
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
        }
    }
}
