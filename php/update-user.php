<?php

require_once "conexion.php";
$conexion = conexion();


$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];
$ccontrasena = $_POST['ccontrasena'];
$correo = $_POST['correo'];

$sql = "UPDATE registro_usuarios SET nombre = '$nombre', telefono = '$telefono', contrasena = '$contrasena', ccontrasena = '$ccontrasena' WHERE correo='$correo'";
echo $result = mysqli_query($conexion, $sql);

echo "<script> alert('USUARIO ACTUALIZADO');window.location.replace(document.referrer);
						</script>";

?>

