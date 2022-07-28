<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Fidelizacion Premios</title>

    <?php require_once FOLDER_TEMPLATE . "head.php";
	require_once FOLDER_TEMPLATE . "tables.php" ?>

</head>

<body style="background-color: beige;">

    <?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>
    <center>
        <div class="text-warning" style="margin: 20px; background:green;width: 50%;">
            <h1 class="display-4" style="color: beige;">Fidelizacion-Premios</h1>
        </div>

    </center>


    <div class="mt-5 px-lg-2 px-sm-1">
        <div class="row m-0">
            <div class="col-lg-12">

                <table id="indexadmin" class="table table-hover table-locker" cellspacing="0" width="100%">

                    <thead>
                        <tr>
                           
                            <th style="width: 15%;background-color:green; color:white;">Nombre</th>
                            <th style="width: 15%;background-color:green; color:white;">No.Documento</th>
                            <th style="width: 15%;background-color:green; color:white;">Telefono</th>
                            <th style="width: 15%;background-color:green; color:white;text-align: left">Correo</th>
                            <th style="width: 15%;background-color:green; color:white;">Cant. Servcicios</th>
                            <th style="width: 15%;background-color:green; color:white;">Notificar premio</th>
                        </tr>
                    </thead>

                    <?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion,$sql_puntaje_clean);
					while ($mostrar = mysqli_fetch_array($result)) {
                        $contador =0;

                        $contador  =$contador +1;

                        
                        if($mostrar['num_encomiendas'] == 10){
                        
                        
					?>


                    <tr style="background-color: #DEFEE4;">
                      
                        <td style="background-color: #DEFEE4;color:white;color:black"><?php echo $mostrar['nombre_cliente'] ?></td>
                        <td style="background-color: #DEFEE4;color:white;color:black"><?php echo $mostrar['numdocumento'] ?></td>
                        <td style="background-color: #DEFEE4;color:white;color:black"><?php echo $mostrar['telefono'] ?></td>
                        <td style="background-color: #DEFEE4;color:white;color:black"><?php echo $mostrar['correo'] ?></td>
                        <td style="background-color: #DEFEE4;color:white;color:black"><?php echo $mostrar['num_encomiendas'] ?></td>
                        <td style="background-color: #DEFEE4;color:white;color:black">
                            <form action="../../php/enviar-regalo.php" method="POST" name="gestion_entrega"
                                id="gestion_entrega">

                                <a href="../../php/enviar-regalo.php?Id=<?php echo $mostrar['id']?>&correo=<?php echo $mostrar['correo']?>"
                                    id="estado_1" name="estado_1" type="submit"><i class="bi bi-gift fs-5 px-2"
                                        style="color: red ;"></i></a>

                            </form>


                        </td>
                    </tr>

                    <!--Ventana Modal para Actualizar--->
                    <?php include('../../template/modals/modal-accions-users.php'); ?>
                    <?php
                        } else {  
                            $contador = $contador + 1;
                            ?>
                    <tr>
                  
                        <td style="text-align: left;"><?php echo $mostrar['nombre_cliente']  ?></td>
                        <td><?php echo $mostrar['numdocumento'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td style="text-align: left;"><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['num_encomiendas'] ?></td>
                        <td>
                            <form action="../../php/enviar-regalo.php" method="POST" name="gestion_entrega"
                                id="gestion_entrega">

                                <a href="../../php/enviar-regalo.php?Id=<?php echo $mostrar['id']?>&correo=<?php echo $mostrar['correo']?>"
                                    id="estado_1" name="estado_1" type="submit"><i class="bi bi-gift fs-5 px-2"
                                        style="color: red"></i></a>

                            </form>


                        </td>
                    </tr>


                    <?php
                        }
                    
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