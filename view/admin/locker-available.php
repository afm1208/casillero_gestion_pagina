<?php require_once "../../config.php";
require_once "../../php/sesion-admin.php";
require_once "../../php/locker-view.php";

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf8_decode">
	<title>Editar Usuario Admin</title>

	<?php require_once FOLDER_TEMPLATE . "head.php" ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

</head>

<body>

	<?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>





	<!--Ejemplo tabla con DataTables-->


	<div class="container px-5">

		<div class="title-locker mt-4 mb-5">
			<center>
				<h1><?php echo $mostrar['nombre_locker'] ?> <a href="" class="text-decoration-none" title="Crear Encomienda" data-bs-toggle="modal" onclick="" onkeyup="" data-bs-target="#createparcel"><i class="bi bi-clipboard2-plus-fill" style="color:#057EC7"></i></a></h1>
			</center>
		</div>
		<div class="all-locker">
			<div class="row mb-5">

				<?php
				$result = mysqli_query($conexion, $sql);
				foreach ($result as $mostrar) {

					//   $result_encomiendas = mysqli_query($conexion, $sql_encomiendas);
					// 	foreach ($result_encomiendas as $mostrar_encomiendas {

				?>

					<div class="col-lg-6 p-0 col-sm-6">
						<div class="taquilla">
							<?php
							if ($mostrar['estado_locker'] == 'Disponible') { 	?>
								<div class="taquilla-available">
								<?php } else if ($mostrar['estado_locker'] == 'Bloqueado') { ?>
									<div class="taquilla-bloqued">
									<?php
								} else if ($mostrar['estado_locker'] == 'Reservado') { ?>
										<div class="taquilla-reserved">
										<?php
									}
									$small = utf8_decode("Pequeño");
									if ($mostrar['tamano_locker'] == 'Grande') { 	?>
											<div class="taquilla-big">
											<?php } else if ($mostrar['tamano_locker'] == 'Mediano') { ?>
												<div class="taquilla-medium">
												<?php } else if ($small == utf8_decode('Pequeño')) { ?>
													<div class="taquilla-small">
													<?php }
													?>
													<div class="row">
														<div class="col-lg-6 col-sm-6 col-6">
															<span> <?php echo utf8_encode($mostrar['num_taquilla']) ?></span>
														</div>
														<div class="col-lg-6 col-sm-6 col-6">
															<div class="row">

																<div class="col-lg-4 col-sm-4 col-4">
																	<a href=""> <i class="bi bi-x-circle-fill" style="color:#e00c0c"></i></a>
																</div>

																<div class="col-lg-4 col-sm-4 col-4">
																	<a href="" data-bs-toggle="modal" data-bs-target="#listlot"> <i class="bi bi-grid-3x3-gap-fill" style="color:#03183f"></i></a>
																</div>

																<div class="col-lg-4 col-sm-4 col-4">
																	<a href="" data-bs-toggle="modal" data-bs-target="#editslot<?php echo utf8_encode($mostrar['num_taquilla']) ?>"> <i class="bi bi-pencil-square" style="color:#03183f"></i></a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-12 "><i class="bi bi-exclamation-diamond-fill" style="font-size:15px"></i>
														<p><?php echo (utf8_encode($mostrar['estado_locker'])) ?></p>
													</div> 
													</div>

												</div>

											</div>
										</div>

										<!--Ventana Modal para Actualizar Slot--->
									<?php include('../../template/modals/modal-accions-slots.php');
								}


									?>





									</div>
								</div>
						</div>
					</div>
			</div>
		</div>
		<script>
			


	function crear_codigo_usuario(){
		var codigo_entrega = document.getElementById('codigo_entrega');
		if (strlen(codigo_entrega) == 6){
		 	var codigo_empresa = random_int(111111,999999);
			 return codigo_empresa;
		}
	}

	function recoger_ropa (codigo_empresa){
		var vida_code_user = 1;
		var vida_code_empresa = 2;
		var puerta = false;
		if (strlen(codigo_empresa) == 6){
          do {
			vida_code_empresa = vida_code_empresa - 1;
			puerta = true;
		} while(vida_code_empresa == 2);
		}
	}

	function dejar_ropa(codigo_empresa){
		if (vida_code_empresa == 1){
         do{
           vida_code_empresa = vida_code_empresa - 1;
		   puerta = true;
		 } while(vida_code_empresa == 1);
		}
	}

	function terminar (codigo_entrega){
		if (vida_code_empresa == 0){
			if (vida_code_user == 1){
		do{
          vida_code_user = vida_code_user - 1;
		}while(vida_code_user == 1);
     } 
		}
  
	}
			var tamanogrande = {
				//solución, material y tiempo
				"1": ["GRABDE", "<?php echo $mostrarag['num_taquilla']; ?> "],
			}
			var tamanomediano = {
				//solución, material y tiempo
				"2": ["mediano", "<?php echo $mostraram['num_taquilla']; ?> "],
			}

			var tamanopequeno = {
				//solución, material y tiempo
				"3": ["Pequeño", "<?php echo $mostrarap['num_taquilla']; ?> "],
			}

			function cambioOpciones1()

			{
				var combo = document.getElementById('tamanogrande');
				var opcion1 = combo.value;


				document.getElementById('tamano-slot').value = tamanogrande[opcion1][0];

				document.getElementById('taquilla-id').value = tamanogrande[opcion1][1];



			}

			function cambioOpciones2()

			{
				var combo = document.getElementById('tamanomediano');
				var opcion2 = combo.value;


				document.getElementById('tamano-slot').value = tamanomediano[opcion2][0];

				document.getElementById('taquilla-id').value = tamanomediano[opcion2][1];



			}

			function cambioOpciones3()

			{
				var combo = document.getElementById('tamanopequeno');
				var opcion3 = combo.value;


				document.getElementById('tamano-slot').value = tamanopequeno[opcion3][0];

				document.getElementById('taquilla-id').value = tamanopequeno[opcion3][1];



			}
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
		<?php require_once FOLDER_TEMPLATE . "scripts.php" ?>

</body>

</html>