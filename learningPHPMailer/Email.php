<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

class Email
{
    private $mailer;

    public function __construct($host, $uname, $pword, $name)
    {
        //Instantiation and passing `true` enables exceptions
        $this->mailer = new PHPMailer(true);
        //Server settings
        $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $this->mailer->isSMTP(); //Send using SMTP
        $this->mailer->Host = $host; //Set the SMTP server to send through
        $this->mailer->SMTPAuth = true; //Enable SMTP authentication
        $this->mailer->Username = $uname; //SMTP username
        $this->mailer->Password = $pword; //SMTP password
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mailer->Port = 587; //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $this->mailer->setFrom($uname, $name);

        
    }

    public function addAddress($email, $name)
    {
        $this->mailer->addAddress($email,$name); //Add a recipient
    }

    public function contentEmail($subject, $body){
        //Content
        $this->mailer->isHTML(true); //Set email format to HTML
        $this->mailer->Subject = $subject;
        $this->mailer->Body = $body;
        $this->mailer->AltBody = strip_tags($body);
    }

    public function sendEmail()
    {
        if (!$this->mailer->send()) {
            return false;
        } else {
            return true;
            echo 'success';
        }
    }
}
