<?php

require_once "conexion.php";
$conexion = conexion();


$estado = $_POST['estado'];
$tamano = utf8_decode($_POST['tamano']);
$observaciones = utf8_encode(utf8_decode($_POST['observaciones']));
$locker = $_POST['locker'];
$id = $_POST['id'];

$sql = "UPDATE detalles_locker SET estado_locker = '$estado', tamano_locker = '$tamano', observacion = '$observaciones' WHERE num_taquilla='$id' And nombre_locker='$locker'";
echo $result = mysqli_query($conexion, $sql);



?>

