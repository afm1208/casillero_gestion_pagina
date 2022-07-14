
<?php
require_once "conexion.php";
$conexion = conexion();
	// $numdocumento = $_GET[''];
	$sql = "SELECT * from casilleros";
	$sqluser = "SELECT reg_u.*, rol_u.descripcion from registro_usuarios reg_u LEFT JOIN roles_usuarios rol_u ON reg_u.idRol = rol_u.id";
    $sqlusers ="SELECT id ,nombre, documento,numdocumento,telefono,correo,contrasena,locker_registrado,idRol,tyc  from registro_usuarios WHERE locker_registrado = 27  ";
	
?>