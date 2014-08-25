<?php
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";  
$mail->SMTPAuth = true;
$mail->Username = "filmezzzinfo@gmail.com"; 
$mail->Password = "Ckgsrsbu"; 
$mail->CharSet = 'UTF-8';
$mail->From = "$email";
$mail->FromName = "$email";
$mail->AddAddress("czifrad92@gmail.com");
$mail->Port       = 587;

$mail->WordWrap = 50;                                 
$mail->IsHTML(true);  
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';

$mail->Subject = "$subject";
$mail->Body    = "$uzenet";

$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
?>