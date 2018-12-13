<?php

error_reporting(1);
require("./class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPDebug = 2; // set mailer to use SMTP

$mail->Host = "srg-me.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@srg-me.com";  // SMTP username
$mail->Password = "NPC_{#e32DFk"; // SMTP password

$mail->From = "inf0@srg-me.com";
$mail->FromName = "Mailer";
$mail->AddAddress("sabitha393@gmail.com", "Sabitha Varghese");
//$mail->AddAddress("ellen@example.com");                  // name is optional

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body = "This is the HTML message body in bold!testing";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if (!$mail->Send()) {
        echo "Message could not be sent.";
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
} else {
        echo 'send';
        exit;
}
?>