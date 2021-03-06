<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Usuarios Registrados</title>

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
							<th style="width: 15%">Nombre</th>
							<th style="width: 15%">Documento</th>
							<th style="width: 10%">Telefono</th>
							<th style="width: 15%">Correo</th>
							<th style="width: 5%">Rol</th>
							<th style="width: 15%">Locker Registrado</th>
							<th style="width: 20%">Acciones</th>
						</tr>
					</thead>

					<?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion, $sqluser);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?php echo $mostrar['nombre'] ?></td>
							<td><?php echo $mostrar['documento'] ?> # <?php echo $mostrar['numdocumento'] ?></td>
							<td><?php echo $mostrar['telefono'] ?></td>
							<td><?php echo $mostrar['correo'] ?></td>
							<td><?php echo $mostrar['descripcion'] ?></td>
							<td><?php echo $mostrar['locker_registrado'] ?></td>
							<td> <a href="#" data-bs-toggle="modal" data-bs-target="#edituser<?php echo $mostrar['id']; ?>"><i class="bi bi-pencil-fill fs-5 px-2" style="color: #05A1D3"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#editrole<?php echo $mostrar['id']; ?>"><i class="bi bi-person-video3 fs-5 px-2" style="color: #F8AE22"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#deleteuser<?php echo $mostrar['id']; ?>"><i class="bi bi-trash-fill fs-5 px-2" style="color: #da1111"></i></a>

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