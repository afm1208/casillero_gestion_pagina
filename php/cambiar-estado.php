<?php

require_once "conexion.php";
$conexion = conexion();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../SMTP/PHPMailer/Exception.php';
require '../SMTP/PHPMailer/PHPMailer.php';
require '../SMTP/PHPMailer/SMTP.php';








if($_GET['Id']){ 
  $ID =$_GET['Id'];
  $correo = $_GET['correo'];
  $sql = "UPDATE encomiendas SET estado = 'Ropa Recibida' where Id = $ID ";
  $result = mysqli_query($conexion, $sql);
 
 
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
 $mail->AddAddress( $correo, "ventas BYS");
 $mail->SetFrom("basesysoportestv@gmail.com", $_POST['contact-name']);
 $mail->AddReplyTo($correo,$_POST['contact-name']);
 $mail->Subject = 'Enviado por '.$_POST['contact-name'];
 $content = ' 
    <font size="4px">Tu ropa se encuentra en el locker </font>
     <br>';
    
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
 }
  

} else if ($_GET['Id2']){
  $ID =$_GET['Id2'];
  $correo = $_GET['correo2'];
    $sql = "UPDATE encomiendas SET estado = 'Ropa recogida para lavar ' where Id = $ID ";
    $result = mysqli_query($conexion, $sql);

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
 $mail->AddAddress( $correo, "ventas BYS");
 $mail->SetFrom("basesysoportestv@gmail.com", $_POST['contact-name']);
 $mail->AddReplyTo($correo,$_POST['contact-name']);
 $mail->Subject = 'Enviado por '.$_POST['contact-name'];
 $content = ' 
    <font size="4px">TU ROPA SE ESTA LAVANDO </font>
     <br>';
    
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
 }

} else if ($_GET['Id3']){
  $ID =$_GET['Id3'];
  $correo = $_GET['correo3'];
    $sql = "UPDATE encomiendas SET estado = 'Ropa limpia entregada' where Id = $ID ";
    $result = mysqli_query($conexion, $sql);

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
 $mail->AddAddress( "alejandroafm1208@gmail.com", "ventas BYS");
 $mail->SetFrom("basesysoportestv@gmail.com", $_POST['contact-name']);
 $mail->AddReplyTo($correo,$_POST['contact-name']);
 $mail->Subject = 'Enviado por '.$_POST['contact-name'];
 $content = ' 
    <font size="4px">YA PUEDES RECOGER TU ROPA </font>
     <br>';
    
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
 }
} else if ($_GET['Id4']){
  $ID =$_GET['Id4'];
  $correo = $_GET['correo4'];
    $sql = "UPDATE encomiendas SET estado = 'Ropa limpia recogida' where Id = $ID ";
    $result = mysqli_query($conexion, $sql);
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
 $mail->AddAddress( "alejandroafm1208@gmail.com", "ventas BYS");
 $mail->SetFrom("basesysoportestv@gmail.com", 'reservas');
 $mail->AddReplyTo($correo,'Reservas');
 $mail->Subject = 'Enviado por RESERVAS';
 $content = ' 
    <font size="4px">TU ROPA LIMPIA YA FUE RECOGIDA </font>
     <br>';
    
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
 }
} 

echo "<script> alert('El estado de la encomienda a cambiado');window.location.replace(document.referrer);
						</script>";

?>
