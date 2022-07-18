<?php

require_once "conexion.php";
$conexion = conexion();


$nombre = $_POST['nombre'];
$documento = $_POST['documento'];
$numdocumento = $_POST['numdocumento'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$id = $_POST['id'];

echo "<script> alert('El estado de la encomienda a cambiado');window.location.replace(document.referrer);
						</script>";

if (buscaRepetido($correo, $numdocumento, $telefono, $id, $conexion) == 1) {
    echo 2;
} else {
    $sql = "UPDATE registro_usuarios SET nombre = '$nombre', documento = '$documento', numdocumento = '$numdocumento', telefono = '$telefono', correo = '$correo' WHERE id='$id'";
    echo $result = mysqli_query($conexion, $sql);
}


function buscaRepetido($cor, $numd, $tel, $id, $conexion)
{
	$sql = "SELECT * from registro_usuarios WHERE (correo='$cor' OR numdocumento='$numd' OR telefono='$tel') and id<>'$id'";
	$result = mysqli_query($conexion, $sql);

	if (mysqli_num_rows($result) > 0) {
		return 1;
	} else {
		return 0;
	}
}
