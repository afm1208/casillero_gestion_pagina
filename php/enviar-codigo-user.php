<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../SMTP/PHPMailer/Exception.php';
require '../SMTP/PHPMailer/PHPMailer.php';
require '../SMTP/PHPMailer/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 0;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "bmail@basesysoportes.com";
$mail->Password   = "correobases4159";

$mail->IsHTML(true);
$mail->AddAddress("ventas@basesysoportes.com", "ventas BYS");
$mail->SetFrom("basesysoportestv@gmail.com", $_POST['contact-name']);
$mail->AddReplyTo($_POST['contact-email'],$_POST['contact-name']);
$mail->Subject = 'Enviado por '.$_POST['contact-name'];
$nombre 
$content = ' <font size="4px">Correo enviado desde el formulario de <font color="#e31515"> correo electronico.</font></font>
    <br>
    <font size="4px"><b>Nombre:</b></font> <font size="4px">'.$_POST['contact-name'].'</font>
    <br>
    <font size="4px"><b>Email: </b></font> <font size="4px">'.$_POST['contact-email'].'</font>
    <br>
    <font size="4px"><b>Telefono: </b></font> <font size="4px">'.$_POST['contact-telefono'].'</font>
    <br>
    <font size="4px"><b>Mensaje: </b></font> <font size="4px">'.$_POST['contact-comment'].'</font>';

$mail->MsgHTML($content); 
if(!$mail->Send()) { 
 echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
  var_dump($mail);
} else {
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
}

?>