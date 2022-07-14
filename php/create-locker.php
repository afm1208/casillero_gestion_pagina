<?php

require_once "conexion.php";
$conexion = conexion();

$compania = $_POST['compania'];
$locker = $_POST['locker'];
$agencia = $_POST['agencia'];
$vfirmware = $_POST['vfirmware'];
$vapp = $_POST['vapp'];
$informacion = $_POST['informacion'];
$localizacion = $_POST['localizacion'];
$slots = $_POST['slots'];
$conectado = $_POST['conectado'];
$tipo = $_POST['tipo'];
$codigo = $_POST['codigo'];
$creado = $_POST['creado'];
$actualizado = $_POST['actualizado'];
$estado = $_POST['estado'];
$tamano = $_POST['tamano'];

if (buscaRepetido($locker, $codigo, $conexion) == 1) {
	echo 2;
} else  { 
	$sql = "INSERT into casilleros (compania,locker,agencia,vfirmware,vapp,informacion,localizacion,slots,conectado,tipo,codigo,creado,actualizado)
				values ('$compania','$locker','$agencia','$vfirmware','$vapp','$informacion','$localizacion','$slots','$conectado','$tipo','$codigo','$creado','$actualizado')";
	echo $result = mysqli_query($conexion, $sql);
	$last_id = mysqli_insert_id($conexion);
	for ($i = 1; $i <= $slots; $i++) {
		$sqlocker = "INSERT into detalles_locker (Id_Locker,num_taquilla,nombre_locker,estado_locker,tamano_locker)
				values ('$last_id','$i','$locker','$estado','$tamano')";

		echo $result = mysqli_query($conexion, $sqlocker);
	}
}




function buscaRepetido($lock, $cod, $conexion)
{
	$sql = "SELECT * from casilleros WHERE locker='$lock' OR codigo='$cod'";
	$result = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($result) > 0) {
		return 1;
	} else {
		return 0;
	}
}
