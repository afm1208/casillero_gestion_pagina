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

<body>

    <?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>


    <div class="mt-5 px-lg-2 px-sm-1">
        <div class="row m-0">
            <div class="col-lg-12">
                <table id="indexadmin" class="table table-hover table-locker" cellspacing="0" width="100%">

                    <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th style="width: 5%">Estado</th>
                            <th style="width: 10%">Nombre </th>
                            <th style="width:  12%">Documento</th>
                            <th style="width: 12%">locker</th>
                            <th style="width:  5%">Taquilla</th>
                            <th style="width:  12%">Codigo logistica</th>
                            <th style="width:  10%">Locker</th>
                            <th style="width:  20%">ACTUALIZAR ESTADO</th>
                        </tr>
                    </thead>

                    <?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion,$sql_gestion_entrega);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>

                    <tr>
                        <td><?php echo $mostrar['Id'] ?></td>
                        <td><?php echo $mostrar['estado'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['numdocumento'] ?></td>
                        <td><?php echo $mostrar['fecha_entregado'] ?></td>
                        <td><?php echo $mostrar['taquilla'] ?></td>
                        <td><?php echo $mostrar['codigo_clean'] ?></td>
                        <td><?php echo $mostrar['nombre_locker'] ?></td>

                        <td>
                            <form action="../../php/cambiar-estado.php" method="POST" name="gestion_entrega" id="gestion_entrega">

<!-- 
                                <input type="submit" name="boton_1"   >
                                <input type="submit" name="boton_2"  >
                                <input type="submit" name="boton_3"  >
                                <input type="submit" name="boton_4"  > -->

                                <a href="../../php/cambiar-estado.php?Id=<?php echo $mostrar['Id']?>&correo=<?php echo $mostrar['correo']?>" id="estado_1" name="estado_1" type="submit"><i class="bi bi-check fs-5 px-2"
                                        style="color: #F8AE22"></i></a>

                                <a href="../../php/cambiar-estado.php?Id2=<?php echo $mostrar['Id']?>&correo1=<?php echo $mostrar['correo']?>" id="estado_2" name="estado_2"><i class="bi bi-check-all fs-5 px-2"
                                        style="color: #05A1D3"></i></a>
                                <a href="../../php/cambiar-estado.php?Id3=<?php echo $mostrar['Id']?>&correo2=<?php echo $mostrar['correo']?>" id="estado_3" name="estado_3"> <i class="bi bi-check2-square fs-5 px-2"
                                        style="color: #da1111"></i></a>
                                <a href="../../php/cambiar-estado.php?Id4=<?php echo $mostrar['Id']?>&correo3=<?php echo $mostrar['correo']?>" id="estado_4" name="estado_4"><i class="bi bi-check-square-fill fs-5 px-2"
                                        style="color: green;"></i></a>

                            </form>


                        </td>

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