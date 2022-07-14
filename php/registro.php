<?php

use LDAP\Result;

require_once "conexion.php";
$conexion = conexion();


$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$numdocumento = $_POST['numdocumento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$ccontrasena = $_POST['ccontrasena'];
$locker_registrado = $_POST['locker_registrado'];
$idRol = $_POST['idRol'];
$tyc = $_POST['tyc'];



	$sql = "INSERT into registro_usuarios (nombre,documento,numdocumento,telefono,correo,contrasena,ccontrasena,locker_registrado,idRol,tyc)
				values ('$nombre','$documento','$numdocumento','$telefono','$correo','$contrasena','$ccontrasena','$locker_registrado','$idRol','$tyc')";
	 $result = mysqli_query($conexion, $sql);



function buscaRepetido($cor, $numd, $tel, $conexion)
{
	$sql = "SELECT * from registro_usuarios WHERE correo='$cor' OR numdocumento='$numd' OR telefono='$tel'";
	$result = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($result) > 0) {
		return 1;
	} else {
		return 0;
	}
}

$activo = true;
$randomnumber = rand (1000,9999); 

function enviar_correo_confirm ($cor,$conexion,$nombre, $code){
	$to = $cor ;
	$subject = "Correo de Confirmacion";
	$message = 'Hola '.$nombre."\r\n"." Sigue este vinculo para activar tu cuenta"."\r\n\r\n"." <script>window.location='../admin/index-admin.php'</script>".$cor."&code=".$code."\r\n";
	$message_registred = "Used ya se encuentra regstrado";
	$headers = 'De: (tu correo )' . "\r\n" .
 'Dudas y/o sugerencias: (tu correo)' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();
	$sql = "SELECT * FROM  registro_usuarios WHERE correo='$cor'  ";
	$result = mysqli_query($conexion, $sql);

    if ($activo = false  ){
     echo $message;
	} else {
		echo $message_registred;
}
}



?>

