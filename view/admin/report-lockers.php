<?php require_once "../../config.php";

require_once "../../php/sesion-admin.php";
?>



<!DOCTYPE html>
<html>

<head>
	<title>Reporte Global Servicios</title>

	<?php require_once FOLDER_TEMPLATE . "head.php";
	require_once FOLDER_TEMPLATE . "tables.php" ?>

</head>

<body style="background-color: beige;">

	<?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>

<center>
        <div class="text-warning" style="margin: 20px;background-color:green;width: 50%;">
            <h1 class="display-4" style="color: beige;">Reporte Global Servicios</h1>
        </div>

    </center>

	<div class="mt-5 px-lg-2 px-sm-1">
		<div class="row m-0">
			<div class="col-lg-12">
				<table id="indexadmin" class="table table-hover table-locker" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th style="width: 8%;background-color:green; color:white;"> N°Servicio</th>
							<th style="width: 10%;background-color:green; color:white;text-align: left">Nombre</th>
							<th style="width: 8%;background-color:green; color:white;text-align: left">Sucursal</th>
							<th style="width: 5%;background-color:green; color:white;">Referencia</th>
							<th style="width: 10%;background-color:green; color:white;">F.Reserva </th>
							<th style="width: 10%;background-color:green; color:white;">F.Apertura User</th>
							<th style="width: 10%;background-color:green; color:white;">F.Apertura Clean</th>
							<th style="width:  12%;background-color:green; color:white;">F.Reclamo User</th>
							<th style="width:  3%;background-color:green; color:white;">Taquilla</th>
							<th style="width:  8%;background-color:green; color:white;">Codigo Cliente</th>
							<th style="width:  8%;background-color:green; color:white;">Codigo Logistica</th>
							<th style="width:  12%;background-color:green; color:white;">Observación</th>
						</tr>
					</thead>

					<?php require_once "../../php/mostrar-tabla.php";
					$result = mysqli_query($conexion,$sql_listar_user_encomienda);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?php echo $mostrar['Id'] ?></td>
							<td style="text-align: left;"><?php echo $mostrar['nombre_cliente'] ?></td>
							<td style="text-align: left;"><?php echo $mostrar['locker'] ?></td>
							<td><?php echo $mostrar['referencia'] ?></td>
							<td><?php echo $mostrar['fecha_reserva'] ?></td>
							<td><?php echo $mostrar['fecha_entregado'] ?></td>
							<td><?php echo $mostrar['fecha_cancelado'] ?></td>
							<td><?php echo $mostrar['fecha_retirado'] ?></td>
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