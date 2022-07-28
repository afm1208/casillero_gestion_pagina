<?php
require_once "conexion.php";
$conexion = conexion();

$Id = $_GET['ID'];
$peque = utf8_decode('Pequeño');


$sql = "SELECT Id_Locker, num_taquilla, nombre_locker, estado_locker, tamano_locker, observacion FROM detalles_locker WHERE Id_Locker = '$Id'";
$resultado = $conexion->query($sql);
$mostrar = $resultado->fetch_assoc();


 $sql_encomiendas = "SELECT nombre_cliente, estado_locker, fecha_reserva, codigo_entrega, fecha_entregado, fecha_cancelado from encomiendas INNER JOIN detalles_locker on encomiendas.nombre_locker = detalles_locker.nombre_locker order by fecha_reserva desc ";
 $histoial = $conexion->query($sql_encomiendas);
 $mostrar_historial = $histoial ->fetch_assoc();



// $sql_encomiendas = "SELECT * from encomiendas  ";
// $histoial = $conexion_historial->prepare($sql_encomiendas);
// $histoial ->execute();
// $resultado_historial -> fetchAll();

$sqlestado = "SELECT a.estado_locker  AS num FROM detalles_locker AS a  WHERE a.Id_Locker = '$Id'  GROUP BY a.estado_locker";
$resultadoestado = $conexion->query($sqlestado);
$mostrarestado = $resultadoestado->fetch_assoc();


$sql_num_slots = "SELECT a.slots AS num FROM casilleros AS a WHERE a.Id = '$Id' GROUP BY a.Id";
$result = $conexion->query($sql_num_slots);
$mostrar_num_slots = $result->fetch_assoc();




$sqlparceld = "SELECT a.estado_locker , COUNT(*) AS num FROM detalles_locker AS a  WHERE a.Id_Locker = '$Id' and a.estado_locker = 'Disponible' GROUP BY a.estado_locker";
$resultadopd = $conexion->query($sqlparceld);
$mostrarpd = $resultadopd->fetch_assoc();



$sqlparcelg = "SELECT a.tamano_locker , COUNT(*) AS num FROM detalles_locker AS a  WHERE a.Id_Locker = '$Id' and a.tamano_locker = 'Grande' and a.estado_locker = 'Disponible' GROUP BY a.tamano_locker";
$resultadopg = $conexion->query($sqlparcelg);
$mostrarpg = $resultadopg->fetch_assoc();

$sqlparcelm = "SELECT a.tamano_locker , COUNT(*) AS num FROM detalles_locker AS a  WHERE a.Id_Locker = '$Id' and a.tamano_locker = 'Mediano' and a.estado_locker = 'Disponible' GROUP BY a.tamano_locker";
$resultadopm = $conexion->query($sqlparcelm);
$mostrarpm = $resultadopm->fetch_assoc();

$sqlparcelp = "SELECT a.tamano_locker , COUNT(*) AS num FROM detalles_locker AS a  WHERE a.Id_Locker = '$Id' and a.tamano_locker = '$peque' and a.estado_locker = 'Disponible' GROUP BY a.tamano_locker";
$resultadopp = $conexion->query($sqlparcelp);
$mostrarpp = $resultadopp->fetch_assoc();


$sqlparcelag = "SELECT num_taquilla From detalles_locker Where Id_locker = '$Id' and estado_locker = 'Disponible' and tamano_locker = 'Grande' ORDER BY rand()";
$resultadoag = $conexion->query($sqlparcelag);
$mostrarag = $resultadoag->fetch_assoc();

$sqlparcelam = "SELECT num_taquilla From detalles_locker Where Id_locker = '$Id' and estado_locker = 'Disponible' and tamano_locker = 'Mediano' ORDER BY rand()";
$resultadoam = $conexion->query($sqlparcelam);
$mostraram = $resultadoam->fetch_assoc();

$sqlparcelap = "SELECT num_taquilla From detalles_locker Where Id_locker = '$Id' and estado_locker = 'Disponible' and tamano_locker = '$peque' ORDER BY rand()";
$resultadoap = $conexion->query($sqlparcelap);
$mostrarap = $resultadoap->fetch_assoc();


?>