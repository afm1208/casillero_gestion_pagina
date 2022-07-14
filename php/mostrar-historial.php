<?php
require_once "conexion.php";
$conexion = conexion();
     $Id = $_GET['ID'];
     $taquilla = $mostrar['num_taquilla'];
	$sql_1 = "SELECT encomiendas.Id, nombre_cliente, encomiendas.nombre_locker,taquilla,estado_locker, fecha_reserva, codigo_entrega, fecha_entregado, fecha_cancelado , encomiendas.observacion from encomiendas INNER JOIN detalles_locker on encomiendas.nombre_locker = detalles_locker.nombre_locker WHERE detalles_locker.Id_Locker = '$Id'GROUP BY codigo_entrega order by encomiendas.fecha_reserva DESC";
     $sql_reporte ="SELECT encomiendas.Id, nombre_cliente, encomiendas.nombre_locker,taquilla,estado_locker, fecha_reserva, codigo_entrega, fecha_entregado, fecha_cancelado , encomiendas.observacion from encomiendas INNER JOIN detalles_locker on encomiendas.nombre_locker = detalles_locker.nombre_locker WHERE detalles_locker.Id_Locker = '$Id'   GROUP BY codigo_entrega order by encomiendas.fecha_reserva DESC";
?>