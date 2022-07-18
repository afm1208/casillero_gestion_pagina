
<?php
require_once "conexion.php";
$conexion = conexion();
	// $numdocumento = $_GET[''];
	$sql = "SELECT * from casilleros";
	$sqluser = "SELECT reg_u.*, rol_u.descripcion from registro_usuarios reg_u LEFT JOIN roles_usuarios rol_u ON reg_u.idRol = rol_u.id";
    $sqlusers ="SELECT id ,nombre, documento,numdocumento,telefono,correo,contrasena,locker_registrado,idRol,tyc  from registro_usuarios WHERE locker_registrado = 27  ";
	$sql_listar_user_encomienda ="SELECT * FROM encomiendas";
	$sql_gestion_entrega = "SELECT encomiendas.Id , registro_usuarios.correo,registro_usuarios.nombre, registro_usuarios.numdocumento, registro_usuarios.telefono,encomiendas.taquilla , encomiendas.nombre_locker, encomiendas.fecha_entregado, encomiendas.codigo_clean, encomiendas.estado FROM `encomiendas` INNER JOIN registro_usuarios ON encomiendas.nombre_cliente = registro_usuarios.nombre GROUP BY fecha_entregado ORDER BY `fecha_entregado` desc";
?>