<?php require_once "../../config.php";

require_once "../../php/sesion-user.php";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Cupon Lavanderia</title>

    <?php require_once FOLDER_TEMPLATE . "head.php";
	require_once FOLDER_TEMPLATE . "tables.php" ?>

</head>

<body style="background-color: beige;">

    <?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>



    <div class="container-profile">
        <div class="card-profile">
            <div class="row">
                <div class="col-lg-6 col-lg-6 align-items-center d-flex justify-content-center"
                    style="border-right: 1px solid #0000003d;">
                    <div class="profile">
                        <div class="img-user">
                            <img src="../../resources/img/icon-admin.png" alt="icon-user" title="icon-user">
                        </div>
                        <h2><?php echo utf8_decode($row['nombre']); ?></h2>

                        <span>Ya casi! Faltan</span>
                        <?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion,$sql_num_encomiendas);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>

                        <h3> <?php echo (10 -$mostrar['No_encomiendas']  ) ; ?> lavadas</h3>
                        <?php
					}
					?>

                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 align-items-center d-flex justify-content-center">
                    <div class="profile">
                        <form id="actdates" class="form" action="../../php/update-user.php" method="POST">

                        <?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion,$sql_num_encomiendas);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>

                            <span class="mb-4">No.Lavadas</span>
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-12 mb-3 align-items-center d-flex">
                                    <label>Hola</label>
                                </div>
                                <div class="col-lg-6 col-md-8 col-sm-12 mb-3">
                                    <h2 type="text" name="nombre" id="nombre">
                                        <?php echo utf8_decode($row['nombre']); ?></h2>

                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-12 mb-3 align-items-center d-flex">
                                    <label>No.Lavadas</label>
                                </div>
                                <div class="col-lg-6 col-md-8 col-sm-12 mb-3">
                                    <h2 type="text" name="telefono" id="telefono">
                                        <?php echo utf8_decode($mostrar['No_encomiendas']); ?></h2>

                                </div>
                                
                                
                                

                             
                                </div>
                            
                            </div>
                            

                            <?php
					}
					?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php require_once FOLDER_TEMPLATE . "scripts.php"; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>