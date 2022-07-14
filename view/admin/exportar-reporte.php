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
							<th style="width: 5%"> ID </th>
							<th style="width: 10%;">Nombre</th>
							<th style="width: 5%">No Documento</th>
							<th style="width: 10%">Estado</th>
							<th style="width:  12%">Fecha Reserva</th>
							<th style="width:  12%">Fecha Entrega</th>
							<th style="width: 12%">Fecha Retirado</th>
							<th style="width:  8%">Locker</th>
							<th style="width:  5%">Taquilla</th>
							<th style="width:  10%">Codigo Usuario</th>
							<th style="width:  10%">Codigo Clean</th>
							<th style="width:  15%">Observacion</th>
						</tr>
					</thead>

					<?php require_once "../../php/mostrar-tabla.php";
				 	    $ID_locker = $_GET['ID']; 
						$sql_listar_user_encomienda = "SELECT encomiendas.Id , encomiendas.nombre_cliente, registro_usuarios.numdocumento , detalles_locker.estado_locker,encomiendas.fecha_reserva, encomiendas.fecha_entregado, encomiendas.fecha_retirado, encomiendas.nombre_locker, encomiendas.taquilla, encomiendas.codigo_entrega , encomiendas.codigo_clean , encomiendas.observacion FROM encomiendas INNER JOIN registro_usuarios ON encomiendas.nombre_cliente = registro_usuarios.nombre INNER JOIN detalles_locker ON encomiendas.nombre_locker = detalles_locker.nombre_locker WHERE detalles_locker.Id_Locker = $ID_locker GROUP BY Id ORDER BY fecha_reserva DESC";
					$result = mysqli_query($conexion,$sql_listar_user_encomienda);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?php echo $mostrar['Id'] ?></td>
							<td><?php echo $mostrar['nombre_cliente'] ?></td>
							<td><?php echo $mostrar['numdocumento'] ?></td>
							<td><?php echo $mostrar['estado_locker'] ?></td>
							<td><?php echo $mostrar['fecha_reserva'] ?></td>
							<td><?php echo $mostrar['fecha_entregado'] ?></td>
							<td><?php echo $mostrar['fecha_retirado'] ?></td>
							<td><?php echo $mostrar['nombre_locker'] ?></td>
							<td><?php echo $mostrar['taquilla'] ?></td>
							<td><?php echo $mostrar['codigo_entrega'] ?></td>
							<td><?php echo $mostrar['codigo_clean'] ?></td>
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