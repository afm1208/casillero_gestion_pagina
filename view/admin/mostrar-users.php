<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>



<!DOCTYPE html>
<html>

<head>
    <title>Exportar Reporte</title>

    <?php require_once FOLDER_TEMPLATE . "head.php";
	require_once FOLDER_TEMPLATE . "tables.php" ?>

</head>

<body style="background-color: beige;">

    <?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>
    <center>
        <div class="text-warning" style="margin: 20px;background-color:green;width: 50%; ">
            <h1 class="display-4" style="color: beige;">Usuarios del casillero</h1>
        </div>

    </center>


    <div class="mt-5 px-lg-2 px-sm-1">
        <div class="row m-0">
            <div class="col-lg-12">
                <table id="indexadmin" class="table table-hover table-locker" cellspacing="0" width="100%">

                    <thead>
                        <tr>
                            <th style="width: 5%; background-color:green; color:white;"> No. </th>
                            <th style="width: 10%; background-color:green; color:white;">Nombre</th>
                            <th style="width:  12%;background-color:green; color:white;">Documento</th>
                            <th style="width:  12%;background-color:green; color:white;">numdocumento</th>
                            <th style="width: 12%;background-color:green; color:white;">telefono</th>
                            <th style="width:  12%;background-color:green; color:white;">Correo</th>
                            <th style="width:  12%;background-color:green; color:white;">contraseña</th>
                            <th style="width:  12%;background-color:green; color:white;">locker</th>
                            <th style="width:  12%;background-color:green; color:white;">Rol</th>
                            <th style="width:  12%;background-color:green; color:white;">Tyc</th>

                        </tr>
                    </thead>

                    <?php require_once "../../php/usuarios-locker.php";
					$result = mysqli_query($conexion,$sqlusers);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['documento'] ?></td>
                        <td><?php echo $mostrar['numdocumento'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['contrasena'] ?></td>
                        <td><?php echo $mostrar['locker_registrado'] ?></td>
                        <td><?php echo $mostrar['idRol'] ?></td>
                        <td><?php echo $mostrar['tyc'] ?></td>
                    </tr>

                    <!--Ventana Modal para Actualizar--->
                    <?php include('../../template/modals/modal-accions-users.php'); ?>
                    <?php
					}
					?>
                </table>

            </div>
        </div>
    </div>



    <?php require_once FOLDER_TEMPLATE . "scripts.php"; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>