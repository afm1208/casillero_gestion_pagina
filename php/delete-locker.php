<?php

require_once "conexion.php";
$conexion = conexion();

$id = $_POST['id'];
$lock = $_POST['lock'];

$sql = "DELETE casilleros.* from casilleros
JOIN detalles_locker
ON casilleros.Id = detalles_locker.Id_Locker
WHERE casilleros.Id = '$id';";
echo $result = mysqli_query($conexion, $sql);
