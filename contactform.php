<?php

$name = $_POST['name'];
$mailFrom = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// This loads the composer package
require "vendor/autoload.php";

// Here I'm importing PHP Mailer name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.office365.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "edwyn__4@hotmail.com";
$mail->Password = "edwynJones12!!";

$mail->setFrom($mailFrom, $firstname, $lastname);
$mail->addAddress("edwyn__4@hotmail.com");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "Email Sent";

?>