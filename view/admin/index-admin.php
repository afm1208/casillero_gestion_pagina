<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Inicio Admin</title>

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
							<th style="width: 10%">Compañia</th>
							<th style="width: 10%">Nombre</th>
							<th style="width: 5%">ID</th>
							<th style="width: 5%">Estado</th>
							<th style="width: 5%">Conectado</th>
							<th style="width: 5%">Firmware</th>
							<th style="width: 5%">Slots</th>
							<th style="width: 8%">Creado</th>
							<th style="width: 8%">Actualizado</th>
							<th style="width: 10%">Información</th>
							<th style="width: 5%">Tipo</th>
							<th style="width: 30%">Acciones</th>
						</tr>
					</thead>

					<?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion, $sql);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?php echo $mostrar['compania'] ?></td>
							<td><?php echo $mostrar['locker'] ?></td>
							<td><?php echo $mostrar['Id'] ?></td>
							<td><?php echo $mostrar['estado'] ?></td>
							<td><?php echo $mostrar['conectado'] ?></td>
							<td><?php echo $mostrar['vfirmware'] ?></td>
							<td><?php echo $mostrar['slots'] ?></td>
							<td><?php echo $mostrar['creado'] ?></td>
							<td><?php echo $mostrar['actualizado'] ?></td>
							<td><?php echo $mostrar['informacion'] ?></td>
							<td><?php echo $mostrar['tipo'] ?></td>

							<td><a href="locker-available.php?ID=<?php echo $mostrar['Id']; ?>"><i class="bi bi-eye-fill fs-5 px-2" style="color: #F8AE22"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#editlocker<?php echo $mostrar['Id']; ?>"><i class="bi bi-pencil-fill fs-5 px-2" style="color: #05A1D3"></i></a>
								<a href="#" data-bs-toggle="modal" data-bs-target="#deletelocker<?php echo $mostrar['Id']; ?>"><i class="bi bi-trash-fill fs-5 px-2" style="color: #da1111"></i></a>
								<a href="exportar-reporte.php?ID=<?php echo $mostrar['Id']; ?>"><i class="bi bi-file-earmark-bar-graph-fill fs-5 px-2" style="color: #04C4DE;"></i></a>
								<a href="mostrar-users.php?ID=<?php echo $mostrar['Id']; ?>"><i class="bi bi-people-fill fs-5 px-2" style="color: #F09A22;"></i></a>
								<a href="#"><i class="bi bi-qr-code-scan fs-5 px-2" style="color: #057EC7;"></i></a>
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