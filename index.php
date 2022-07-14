<?php require_once "config.php"; ?>

<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	
	<?php require_once FOLDER_TEMPLATE . "head.php" ?>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="img-principal text-center">
					<img src="resources/img/logo-casilleros-large.png" alt="logo casilleros inteligentes" title="logo casilleros inteligentes">
				</div>
				<form id="formlogin" class="form" action="" method="POST">
					<div class="form-sesion">
						<div class="col-lg-12">
							<input type="text" name="correo" id="correo" placeholder="Email">
						</div>
						<div class="col-lg-12">
							<input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
						</div>
						<div class="col-lg-12 text-center">
							<span class="btn-yellow" id="entrarSistema">Iniciar Sesión</span>
						</div>
					</div>
				</form>
				<div class="links row mt-2">
					<div class="col-lg-6 col-md-12 mt-3" id="one"><a href="create-account.php">Crear Una Cuenta</a></div>
					<div class="col-lg-6 col-md-12 mt-3" id="two"><a href="">¿Olvidó su contraseña?</a></div>
				</div>
			</div>
		</div>
	</div>


	<?php require_once FOLDER_TEMPLATE . "scripts.php" ?>
</body>

</html>