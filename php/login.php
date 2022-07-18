<?php


session_start();
require_once "conexion.php";

$conexion = conexion();

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * from registro_usuarios where correo='$correo' and contrasena='$contrasena'";
$result = mysqli_query($conexion, $sql);


$filas = mysqli_fetch_array($result);

if ($filas['idRol'] == 1) { //administrador
	$_SESSION['user'] = $correo;
	$_SESSION['idRol'] = "1";
	echo 1;
} 
else
if ($filas['idRol'] == 2) { //usuario
	$_SESSION['user'] = $correo;
	$_SESSION['idRol'] = "2";
	echo 1;
}
 else {
	echo 0;
}


mysqli_free_result($result);
mysqli_close($conexion);
