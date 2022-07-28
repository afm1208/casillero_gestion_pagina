<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestion Casilleros</title>

    <?php require_once FOLDER_TEMPLATE . "head.php";
	require_once FOLDER_TEMPLATE . "tables.php" ?>

</head>

<body style="background-color: beige;">

    <?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>

    <center>
        <div class="text-warning" style="margin: 10px;background-color:green;  width: 200px; ">
            <h4 class="display-8" style="color:beige">Clean is Good</h4>
        </div>
        <img src="../../resources/img/logo-casilleros-large.png" width="30%" style="margin: 10px;" alt="">
        <div class="text-warning" style="margin: 5px;background-color:green;width: 40%; ">
            <h1 class="display-4" style="color:beige">Casilleros Activos</h1>
        </div>
        <div class="container" style="margin:30px ">
            <!-- <a href="" data-bs-toggle="modal" data-bs-target="#createlocker" style="margin: 10px;"><i class="bi bi-plus-circle-fill fs-1"> </i></a> -->
            <a href="" data-bs-toggle="modal" data-bs-target="#createlocker" style="margin: 3px; margin-top:2px"
                class="btn btn-primary -fill fs-4">Crear locker</a>
        </div>

    </center>


    <div class="mt-5 px-lg-2 px-sm-1" style="margin-top: 0px;">
        <div class="row m-0">
            <div class="col-lg-12">
                <table id="indexadmin" class="table table-hover table-locker" cellspacing="0" width="100%"
                    style="margin: 0px;">
                    <thead>
                        <tr>
                            <th style="width: 4%;background-color:green; color:white;">N°</th>
                            <th style="width: 10%;background-color:green; color:white;">Sucursal</th>
                            <th style="width: 5%;background-color:green; color:white;">Referencia</th>
                            <th style="width: 10%;background-color:green; color:white;">Direccion</th>
                            <th style="width: 5%;background-color:green; color:white;">ID</th>
                            <th style="width: 5%;background-color:green; color:white;">N°Taquillas</th>
                            <th style="width: 8%;background-color:green; color:white;">F.Creacion</th>
                            <th style="width: 3%;background-color:green; color:white;">Estado</th>
                            <th style="width: 8%;background-color:green; color:white;">Conectado</th>
                            <th style="width: 5%;background-color:green; color:white;">Firmware</th>
                            <th style="width: 5%;background-color:green; color:white;">Bateria</th>
                            <th style="width: 8%;background-color:green; color:white;">Actualizado</th>
                            <th style="width: 10%;background-color:green; color:white;">Información</th>
                            <!-- <th style="width: 10%;background-color:green; color:white;">N°Servicios</th> -->
                            <th style="width: 30%;background-color:green; color:white;">Acciones</th>
                        </tr>
                    </thead>

                    <?php require_once "../../php/mostrar-tabla.php";
                    
					$result = mysqli_query($conexion, $sql1);
                    
                    $contador = 0;
					while ($mostrar = mysqli_fetch_array($result)) {
                        $contador = $contador + 1;
					?>
                    <tr>
                        <td><?php echo $contador ?></td>
                        <td style="text-align: left;"><?php echo $mostrar['locker'] ?></td>
                        <td style="text-align: left;"><?php echo $mostrar['referencia'] ?></td>
                        <td style="text-align: left;"><?php echo $mostrar['localizacion'] ?></td>
                        <td><?php echo $mostrar['Id'] ?></td>
                        <td><?php echo $mostrar['slots'] ?></td>
                        <td><?php echo $mostrar['creado'] ?></td>
                        <td><?php echo $mostrar['estado'] ?></td>
                        <td><?php echo $mostrar['conectado'] ?></td>
                        <td><?php echo $mostrar['vfirmware'] ?></td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                    style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td><?php echo $mostrar['actualizado'] ?></td>
                        <td><?php echo $mostrar['informacion'] ?></td>


                        <td><a href="locker-available.php?ID=<?php echo $mostrar['Id']; ?>"><i
                                    class="bi bi-eye-fill fs-5 px-2" style="color: #F8AE22"></i></a>
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#editlocker<?php echo $mostrar['Id'];?>"><i
                                    class="bi bi-pencil-fill fs-5 px-2" style="color: #05A1D3"></i></a>
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#deletelocker<?php echo $mostrar['Id']; ?>"><i
                                    class="bi bi-trash-fill fs-5 px-2" style="color: #da1111"></i></a>
                            <a href="exportar-reporte.php?ID=<?php echo $mostrar['Id']; ?>"><i
                                    class="bi bi-file-earmark-bar-graph-fill fs-5 px-2" style="color: #04C4DE;"></i></a>
                            <a href="mostrar-users.php?ID=<?php echo $mostrar['Id']; ?>"><i
                                    class="bi bi-people-fill fs-5 px-2" style="color: #F09A22;"></i></a>
                                    
                            <a href="../../php/verificar-estado.php?ID=<?php echo $mostrar['Id']?>" id="auto_evaluacion"
                                name="auto_evaluacion"><i class="bi bi-activity fs-5 px-2"
                                    style="color: #057EC7;"></i></a>
                        </td>
                    </tr>

                    <!--Ventana Modal para Actualizar--->
                    <?php  include('../../template/modals/modal-accions-locker.php'); ?>
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