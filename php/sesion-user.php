

<?php
session_start();

require_once  ("conexion.php");
$conexion = conexion();

$iduser = $_SESSION['user'];

$sql = "SELECT id, nombre, documento, numdocumento, telefono, correo, contrasena FROM registro_usuarios WHERE correo = '$iduser'";


$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

if ($_SESSION["idRol"] === null) {
        echo"<script>window.location='../../index.php'</script>;";
} else {
    if ($_SESSION["idRol"] == 1) {
      
                echo"<script>window.location='../admin/index-admin.php'</script>;";
    }
}

?>