<?php
// formData
$data = array();
$subject = "Mensagem de " . $_POST['name'];
$body = '';
foreach ($_POST as $key => $value) {
    $body .= ucfirst($key) . ": " . $value;
    $body .= "<hr>";
}

// //Load Composer's autoloader
require "../phpmailer/PHPMailerAutoload.php";

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'franklin@franklinhenrique.com';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('franklin@franklinhenrique.com', 'Franklin');
$mail->addAddress('contato@franklinhenrique.com', 'Contato');     // Add a recipient


//Content
$mail->CharSet = 'UTF-8';
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = strip_tags($body);

if (!$mail->send()) {
    $data['error'] = 'true';
} else {
    $data['Success'] = 'true';
}


die(json_encode($data));
