<?php
require_once "conexion.php";
$conexion = conexion();

$correo = $opciones['correo'];
$estado = $_POST['estado'];
$tamano = $_POST['tamanoslot'];
$cliente = $_POST['nombre-cliente'];
$info = $_POST['info'];
$locker = $_POST['nombre-locker']; 
$creado = $_POST['creado'];
$reserva = $_POST['f_reserva'];
$taquillaid = $_POST['taquilla-id'];
$codigo_entregable = $_POST['codigo_prueba'];
$codigo_clean= rand(111111,999999);


 // creamos la funcion para generar un token 
$sql = "INSERT into	encomiendas (nombre_cliente,nombre_locker,taquilla,fecha_reserva,fecha_entregado,fecha_retirado,fecha_cancelado,observacion,codigo_entrega,codigo_clean,estado)
values ('$cliente','$locker','$taquillaid','$creado','$creado','$creado','$creado','$info','$codigo_entregable','$codigo_clean','$estado')";
 $result = mysqli_query($conexion, $sql);
 echo  + $codigo_clean;


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
 $mail->AddAddress( "alejandroafm1208@gmail.com", "ventas BYS");
 $mail->SetFrom("basesysoportestv@gmail.com", $_POST['nombre-cliente']);
 $mail->AddReplyTo($_POST['contact-email'],$_POST['nombre-cliente']);
 $mail->Subject = 'Enviado por '.$_POST['nombre-cliente'];
 $content = ' <font size="4px">Correo enviado desde el formulario de <font color="#e31515"> correo electronico.</font></font>
     <br>
     <font size="4px"><b>Nombre:</b></font> <font size="4px">'.$_POST['nombre-cliente'].'</font>
     <br>
     <font size="4px"><b>Su codigo de retiro es: </b></font> <font size="4px">'.$_POST['codigo_prueba'].'</font>
     <br>
     <font size="4px"><b>Taquilla # </b></font> <font size="4px">'.$_POST['taquilla-id'].'</font>
     <br>
     <font size="4px"><b>En el locker: </b></font> <font size="4px">'.$_POST['nombre-locker'].'</font>';
 
 $mail->MsgHTML($content); 
 if(!$mail->Send()) { 
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=Algo-salio-mal.html\">";
   var_dump($mail);
 } else {
   echo "<meta http-equiv=\"refresh\" content=\"0;URL=Agradecimiento.html\">";
 }

 
 echo "<script> alert('ENCOMIENDA CREADA EXITOSAMENTE!');window.location.replace(document.referrer);
						</script>";

 
 ?>





// $sql = "UPDATE detalles_locker set estado_locker = '$reserva' WHERE  Id_Locker = '$Id' and num_taquilla = '$taquillaid' and tamano_locker = '$tamano' ";
// echo $result = mysqli_query($conexion, $sql);
  
