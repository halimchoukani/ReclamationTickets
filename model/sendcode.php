  <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $token = bin2hex(random_bytes(50));
    echo $token;
    if (isset($_POST['recover-submit'])) {
        require "../vendor/autoload.php";

        $mail = new PHPMailer(true);
        $email = $_POST['email'];

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'halimchoukani3@gmail.com';
            $mail->Password   = ''; // Use a secure method for storing this
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use ENCRYPTION_SMTPS for port 465
            $mail->Port       = 465; // Use 587 if you are using ENCRYPTION_STARTTLS
            $mail->SMTPDebug = 0;
            $mail->setFrom('halimchoukani3@gmail.com', 'Helloworld');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body ' . $token . ' <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error : {$mail->ErrorInfo}";
        }
    }
    ?>