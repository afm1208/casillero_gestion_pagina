<?php

require_once "conexion.php";
$conexion = conexion();


$idRol = $_POST['idRol'];
$id = $_POST['id'];

$sql = "UPDATE registro_usuarios SET idRol = '$idRol' WHERE id='$id'";
echo $result = mysqli_query($conexion, $sql);


?>

