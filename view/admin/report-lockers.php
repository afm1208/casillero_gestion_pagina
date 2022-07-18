<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>



<!DOCTYPE html>
<html>

<head>
	<title>Lista Usuarios Encomiendas</title>

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
							<th style="width: 16%"> ID</th>
							<th style="width: 16%">Nombre</th>
							<th style="width:  12%">Fecha Reserva</th>
							<th style="width:  12%">Fecha Entrega</th>
							<th style="width: 12%">Fecha Retirado</th>
							<th style="width:  12%">Fecha Cancelado</th>
							<th style="width:  12%">Casillero</th>
							<th style="width:  12%">Observación</th>
						</tr>
					</thead>

					<?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion,$sql_listar_user_encomienda);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?php echo $mostrar['Id'] ?></td>
							<td><?php echo $mostrar['nombre_cliente'] ?></td>
							<td><?php echo $mostrar['fecha_reserva'] ?></td>
							<td><?php echo $mostrar['codigo_entrega'] ?></td>
							<td><?php echo $mostrar['fecha_entregado'] ?></td>
							<td><?php echo $mostrar['fecha_cancelado'] ?></td>
							<td><?php echo $mostrar['taquilla'] ?></td>
							<td><?php echo $mostrar['observacion'] ?></td>

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