<?php
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";  
$mail->SMTPAuth = true;
$mail->Username = "filmezzzinfo@gmail.com"; 
$mail->Password = "Ckgsrsbu"; 
$mail->CharSet = 'UTF-8';
$mail->From = "filmezzzinfo@gmail.com";
$mail->FromName = "Jedlik Labor";
$mail->AddAddress("$email");
$mail->Port       = 587;

$mail->WordWrap = 50;                                 
$mail->IsHTML(true);  
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';

$mail->Subject = "Jedlik labor felhasználó";
$mail->Body    = 'Tisztelt felhasználó! <br> A labor.jedlik.hu-hoz tartozó felhasználóneve : ' . $nickname . ' , jelszava ' . $password .'.';

$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
?>