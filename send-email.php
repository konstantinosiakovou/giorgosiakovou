<?php

require "vendor/autoload.php";


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


$name = $_POST["firstName"];
$email = $_POST["email"];
$message = $_POST["message"];


$mail = new PHPMailer(true);
$mail -> SMTPDebug = SMTP::DEBUG_SERVER;

$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "giorgosiakovoumusic@yahoo.com";
$mail->Password = "qajniwpebwgthuzk";

$mail->setFrom($email, $name);
$mail->addAddress("giorgosiakovoumusic@yahoo.com", "Giorgos Iakovou");
$mail->addReplyTo($email, $name);
$mail->Sender = $email;

$mail->Body = $message;

$mail->send();

header("Location: sent.html");