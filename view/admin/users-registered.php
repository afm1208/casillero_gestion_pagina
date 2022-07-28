<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestion Usuarios</title>

    <?php require_once FOLDER_TEMPLATE . "head.php";
	require_once FOLDER_TEMPLATE . "tables.php" ?>

</head>

<body style="background-color: beige;">

    <?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>


    <center>
        <div class="text-warning" style="margin: 20px;background-color:green;width: 40%; ">
            <h1 class="display-4" style="color: beige;">Usuarios Registrados</h1>
        </div>
        <p>

            <button class="btn btn-primary" style="margin: 20PX;width:20%" type="button" data-bs-toggle="collapse"
                data-bs-target="#form-new-user" aria-expanded="false" aria-controls="form-new-user"
                name="boton-crear-user" id="boton-crear-user">
                Nuevo usuario
            </button>
        </p>

        <div class="collapse" id="form-new-user" style="width: 50%;">
            <div class="card card-body">
                <form name="formulario-new-user-encomienda" method="POST" action="../../php/registro-usuario.php">
                    <div class="mb-3">

                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Nombres y apeliidos" style="border-radius: 60px;">
                    </div>
                    <div class="mb-3">

                        <input type="text" class="form-control" id="numdocumento" name="numdocumento"
                            placeholder="Documento" style="border-radius: 60px;">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Celular"
                            style="border-radius: 60px;">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Email"
                            style="border-radius: 60px;">
                    </div>
                    <div class="container" style="border-radius: 60px;">

                        <select class="form-select" aria-label="Default select example" style="border-radius: 60px;"
                            id="locker_registrado" name="locker_registrado">
                            <option selected>Casilleros</option>
                            <?php
                                                $consulta = "SELECT * FROM casilleros";
                                                $ejecutar = mysqli_query($conexion, $consulta);
                                                ?>

                                               <?php foreach ($ejecutar as $opciones) : ?>
                                               <option
                                                   value="<?php echo $opciones['Id'] ?> & <?php echo $opciones['locker'] ?> & <?php echo $opciones['referencia'] ?> ">
                                                   <?php echo $opciones['Id'] ?> :
                                                   <?php echo $opciones['locker']?> :
                                                   <?php echo $opciones['referencia']?>
                                               </option>
                                               <?php endforeach ?>
                        </select>
                      
                    </div>
                    <div class="links row mt-2">
                        <div class="col-lg-12 col-md-12 mt-3 text-center">
                            <input type="radio" name="tyc" id="tyc" value="si" required>
                            Aceptar <a href="create-account.php">Terminos Y Condiciones</a>
                        </div>
                    </div>

                    <input type="hidden" id="documento" name="documento" value="Cedula">
                    <input type="hidden" id="contrasena" name="contrasena" value="000000">
                    <input type="hidden" id="ccontrasena" name="ccontrasena" value="000000">
                    <input type="hidden" id="idRol" name="idRol" value="2">




                    <input type="submit" class="btn btn-primary" value="Crear Usuario" name="registrarNuevo"
                        data-bs-toggle="modal" data-bs-target="#modal-confirmed" style="margin: 10px;">
                </form>
            </div>
        </div>

    </center>

    <div class="mt-5 px-lg-2 px-sm-1">
        <div class="row m-0">
            <div class="col-lg-12">
                <table id="indexadmin" class="table table-hover table-locker" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="width: 5%;background-color:green; color:white;">N°</th>
                            <th style="width: 8%;background-color:green; color:white;">Nombre</th>
                            <th style="width: 15%;background-color:green; color:white;">Documento</th>
                            <th style="width: 10%;background-color:green; color:white;">Telefono</th>
                            <th style="width: 10%;background-color:green; color:white;">Correo</th>
                            <th style="width: 15%;background-color:green; color:white;">Locker Registrado</th>
                            <th style="width: 5%;background-color:green; color:white;">Rol</th>
                            <th style="width: 20%;background-color:green; color:white;">Acciones</th>
                        </tr>
                    </thead>

                    <?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion, $sqluser);
					$contador = 0;
					while ($mostrar = mysqli_fetch_array($result)) {
						$contador = $contador + 1;
					?>
                    <tr>
                        <td><?php echo $contador ?></td>
                        <td style="text-align: left;"><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['numdocumento'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td style="text-align: left;"><?php echo $mostrar['correo'] ?></td>
                        <td><?php echo $mostrar['locker_registrado'] ?></td>
                        <td><?php echo $mostrar['descripcion'] ?></td>
                        <td> <a href="#" data-bs-toggle="modal"
                                data-bs-target="#edituser<?php echo $mostrar['id']; ?>"><i
                                    class="bi bi-pencil-fill fs-5 px-2" style="color: #05A1D3"></i></a>
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#editrole<?php echo $mostrar['id']; ?>"><i
                                    class="bi bi-person-video3 fs-5 px-2" style="color: #F8AE22"></i></a>
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#deleteuser<?php echo $mostrar['id']; ?>"><i
                                    class="bi bi-trash-fill fs-5 px-2" style="color: #da1111"></i></a>

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