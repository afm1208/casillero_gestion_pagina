<?php
require_once "conexion.php";
$conexion = conexion();

$Id = $_GET['ID'];
$peque = utf8_decode('Pequeño');

$sqlusers ="SELECT id ,nombre, documento,numdocumento,telefono,correo,contrasena,locker_registrado,idRol,tyc  from registro_usuarios WHERE locker_registrado = $Id  ";

?>