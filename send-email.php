<?php
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$subject $_POST["sujet"]
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-mail.outlook.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "you@example.com";
$mail->Password = "password";

$mail->setFrom($email, $name);
$mail->addAddress("mathieu.exam@outlook.fr", "Mathieu");

$mail->Subject = $subject;
$mail->Body = $message;
$mail->number = $number;


$mail->send();

header("Location: sent.html");