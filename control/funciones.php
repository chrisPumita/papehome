<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
include_once "../SERVER.php";

function enviaCorreo($correo){
//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
      //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = HOST;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = USERNAME_MAIL;                     //SMTP username
        $mail->Password   = PW_MAIL;                               //SMTP password
        $mail->SMTPOptions = array(  //necesario sino me larga error
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Port       = PORT_MAIL;//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SMTPSecure = "ssl";
        //Recipients
        $mail->setFrom(USERNAME_MAIL, 'TIENDA EN LINEA');
        $mail->addAddress($correo, 'Cliente Irwin');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'ASUNTO DEL CORREO';
        $mail->Body    = getBody();

        return $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function getBody(){
    return '';
}