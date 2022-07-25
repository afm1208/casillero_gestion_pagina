
<?php
require_once "conexion.php";
$conexion = conexion();
	// $numdocumento = $_GET[''];
	$sql = "SELECT * from casilleros";
	$sqluser = "SELECT reg_u.*, rol_u.descripcion from registro_usuarios reg_u LEFT JOIN roles_usuarios rol_u ON reg_u.idRol = rol_u.id";
	$sql_listar_user_encomienda ="SELECT * FROM encomiendas ORDER BY encomiendas.Id DESC";
	$sql_gestion_entrega = "SELECT encomiendas.Id , registro_usuarios.correo,registro_usuarios.nombre, registro_usuarios.numdocumento, registro_usuarios.telefono,encomiendas.taquilla , encomiendas.nombre_locker, encomiendas.fecha_entregado, encomiendas.codigo_clean, encomiendas.estado, encomiendas.pago, encomiendas.codigo_entrega FROM `encomiendas` INNER JOIN registro_usuarios ON encomiendas.nombre_cliente = registro_usuarios.nombre GROUP BY fecha_entregado ORDER BY `fecha_entregado` desc";
	$sql_puntaje_clean="SELECT registro_usuarios.id,COUNT(encomiendas.Id) AS num_encomiendas , encomiendas.nombre_cliente, registro_usuarios.numdocumento, registro_usuarios.telefono, registro_usuarios.correo FROM `encomiendas` INNER JOIN registro_usuarios ON encomiendas.nombre_cliente = registro_usuarios.nombre GROUP BY encomiendas.nombre_cliente";
	$sql_num_encomiendas ="SELECT COUNT(encomiendas.Id) AS No_encomiendas, registro_usuarios.nombre FROM `encomiendas` INNER JOIN registro_usuarios ON encomiendas.nombre_cliente = registro_usuarios.nombre WHERE encomiendas.nombre_cliente = 'Alejandro' GROUP BY registro_usuarios.nombre";
?>