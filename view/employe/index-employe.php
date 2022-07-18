<?php require_once "../../config.php";

require_once "../../php/sesion-employe.php";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Inicio usuario</title>

    <?php require_once FOLDER_TEMPLATE . "head.php" ?>

</head>

<body>

    <?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>

    <!-- <div class="card text-center">
        <div class="card-header">
            Encomiendas
        </div>
        <div class="card-body">
            <h5 class="card-title">ENCOMIENDA</h5>
            <p class="card-text">
                
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
 -->
 
 <div class="mt-5 px-lg-2 px-sm-1">
		<div class="row m-0">
			<div class="col-lg-12">
				<table id="indexadmin" class="table table-hover table-locker" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th style="width: 10%">Id Reserva</th>
							<th style="width: 10%">Nombre</th>
							<th style="width: 10%">Locker</th>
							<th style="width: 15%">Taquilla</th>
							<th style="width: 15%">Codigo entrega</th>
							<th style="width: 15%">Fecha entregado</th>
							<th style="width: 10%">Fecha retirado</th>
							<th style="width: 20%">Observacion</th>
						</tr>
					</thead>

					<?php require_once "../../php/mostrar-tabla.php";
					$numdocumento = $row['numdocumento'];
					$sql_user_normal="SELECT encomiendas.Id, nombre_cliente, encomiendas.nombre_locker,taquilla, codigo_entrega, fecha_entregado , fecha_retirado , encomiendas.observacion from encomiendas INNER JOIN registro_usuarios on encomiendas.nombre_cliente = registro_usuarios.nombre WHERE registro_usuarios.numdocumento = $numdocumento GROUP BY Id order by encomiendas.fecha_reserva ASC";
					$result = mysqli_query($conexion,$sql_user_normal);
					while ($mostrar = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?php echo $mostrar['Id'] ?></td>
							<td><?php echo $mostrar['nombre_cliente'] ?> </td>
							<td><?php echo $mostrar['nombre_locker'] ?></td>
							<td><?php echo $mostrar['taquilla'] ?></td>
							<td><?php echo $mostrar['codigo_entrega'] ?></td>
							<td><?php echo $mostrar['fecha_entregado'] ?>  </td>
							<td><?php echo $mostrar['fecha_retirado'] ?></td>
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


    <?php require_once FOLDER_TEMPLATE . "scripts.php" ?>

</body>

</html>