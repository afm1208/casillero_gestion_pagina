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
							<th style="width: 5%"> No. </th>
							<th style="width: 10%">Nombre</th>
							<th style="width:  12%">Documento</th>
							<th style="width:  12%">numdocumento</th>
							<th style="width: 12%">telefono</th>
							<th style="width:  12%">Correo</th>
							<th style="width:  12%">contraseña</th>
							<th style="width:  12%">locker</th>
                            <th style="width:  12%">Rol</th>
                            <th style="width:  12%">Tyc</th>

						</tr>
					</thead>

					<?php require_once "../../php/mostrar-tabla.php";
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