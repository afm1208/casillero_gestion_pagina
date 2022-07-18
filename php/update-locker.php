<?php

require_once "conexion.php";
$conexion = conexion();


$compania = $_POST['upcompania'];
$locker = $_POST['uplocker'];
$agencia = $_POST['upagencia'];
$vfirmware = $_POST['upvfirmware'];
$vapp = $_POST['upvapp'];
$informacion = $_POST['upinformacion'];
$localizacion = $_POST['uplocalizacion'];
$slots = $_POST['upslots'];
$slotsmas = $_POST['upslots'];
$conectado = $_POST['upconectado'];
$tipo = $_POST['uptipo'];
$codigo = $_POST['upcodigo'];
$creado = $_POST['upcreado'];
$actualizado = $_POST['upactualizado'];
$id = $_GET['id'];



echo "<script> alert('Locker actualizado');window.location.replace(document.referrer);
						</script>";
if (buscaRepetido($locker, $id, $conexion) == 1) {
    echo 2;
} else {
    $sql = "UPDATE casilleros SET compania = '$compania', locker = '$locker', agencia = '$agencia', vfirmware = '$vfirmware', vapp = '$vapp', informacion = '$informacion', localizacion = '$localizacion', slots = '$slotsmas', conectado = '$conectado', tipo = '$tipo', codigo = '$codigo', creado = '$creado', actualizado = '$actualizado' WHERE Id='$id'";
    echo $result = mysqli_query($conexion, $sql);
    for ($i = $slots + 1; $i <= $slotsmas; $i++) {
		$sqlocker = "INSERT into detalles_locker (Id_Locker,num_taquilla,nombre_locker,estado_locker,tamano_locker)
				values ('$id','$i','$locker','Bloqueado','Mediano')";

		echo $result = mysqli_query($conexion, $sqlocker);
	}
}


function buscaRepetido($lock, $id, $conexion)
{
    $sql = "SELECT * from casilleros WHERE locker = '$lock' and Id<>'$id'";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) > 0) {
        return 1;
    } else {
        return 0;
    }
}
