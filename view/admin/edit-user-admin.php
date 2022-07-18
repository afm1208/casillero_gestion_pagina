<?php require_once "../../config.php";
require_once "../../php/sesion-admin.php";

?>

<!DOCTYPE html>
<html>

<head>
	<title>Editar Usuario Admin</title>

	<?php require_once FOLDER_TEMPLATE . "head.php" ?>

</head>

<body>

	<?php require_once "../../template/navbar.php";
	require_once "../../template/menu.php";
	?>
	<div class="container-profile">
		<div class="card-profile">
			<div class="row">
				<div class="col-lg-6 col-lg-6 align-items-center d-flex justify-content-center" style="border-right: 1px solid #0000003d;">
					<div class="profile">
						<div class="img-user">
							<img src="../../resources/img/icon-admin.png" alt="icon-user" title="icon-user">
						</div>
						<h2><?php echo utf8_decode($row['nombre']); ?></h2>

						<span><?php echo utf8_decode($row['numdocumento']); ?></span>

						<h3><?php echo utf8_decode($row['correo']); ?></h3>
					</div>
				</div>
				<div class="col-lg-6 col-lg-6 align-items-center d-flex justify-content-center">
					<div class="profile">
						<form id="actdates" class="form"  action="../../php/update-user.php" method="POST">
							<span class="mb-4">Actualización De Datos</span>
							<div class="row">
								<div class="col-lg-6 col-md-4 col-sm-12 mb-3 align-items-center d-flex">
									<label>Nombre</label>
								</div>
								<div class="col-lg-6 col-md-8 col-sm-12 mb-3">
									<input type="text" name="nombre" id="nombre"  value="<?php echo utf8_decode($row['nombre']); ?>" required>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-12 mb-3 align-items-center d-flex">
									<label>Telefono</label>
								</div>
								<div class="col-lg-6 col-md-8 col-sm-12 mb-3">
									<input type="text" name="telefono" id="telefono"  value="<?php echo utf8_decode($row['telefono']); ?>" required>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-12 mb-3 align-items-center d-flex">
									<label>Contraseña</label>
								</div>
								<div class="col-lg-6 col-md-8 col-sm-12 mb-3 input-wrapper">
									<input type="password" class="input password" name="contrasena"  id="contrasena" value="<?php echo utf8_decode($row['contrasena']); ?>" required>
									<div class="eye"><i class="bi bi-eye-fill input-icon password show"></i></div>
								</div>
								<div class="col-lg-6 col-md-4 col-sm-12 mb-3 align-items-center d-flex">
									<label>Confirme Contraseña</label>
								</div>

								<div class="col-lg-6 col-md-8 col-sm-12 mb-3 input-wrapper">
									<input type="password" class="input password" name="ccontrasena" id="ccontrasena"  value="<?php echo utf8_decode($row['contrasena']); ?>" required>
									<div class="eye2"><i class="bi bi-eye-fill input-icon password show"></i></div>

								</div>
								<input type="hidden" name="correo" id="correo" value="<?php echo utf8_decode($row['correo']); ?>">
							</div>
							<div class="col-lg-12 text-center">
								<button id="actualizaruser" class="btn-yellow" >Actualizar Datos</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require_once FOLDER_TEMPLATE . "scripts.php" ?>

</body>

</html>