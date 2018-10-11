<?php
require_once "clases/ValidatorRegisterForm.php";

if ($_POST) {
	$FormData = new ValidatorRegisterForm($_POST,$_FILES);
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
	var_dump($FormData->esValido());
	echo "<br>";
	$errores = $FormData->getAllErrors();
	// echo var_dump($FormData->getAllErrors());
	foreach ($errores as $error) {
		echo $error;
		echo "<br>";
	}
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Mi Cuenta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

	<!-- Llama a las funciones controladoras -->
	<?php // require_once ("autoload.php") ?>



	<?php require_once ("header.php") ?>


	<div class="container signjoin">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="row ingresar">
					<div class="col-12 d-flex justify-content-between align-items-center">
						<h4>Ingresar</h4>
						<small><a href="#">Olvidaste tu contraseña?</a></small>
					</div>
					<div class="col-12">
						<form class="form-group" method="post">
							<input type="text" class="form-control form-email" placeholder="Email" name="email" id="email">
							<input type="password" class="form-control form-password" placeholder="Contraseña" name="password" id=
							"password">
							<div class="form-check d-flex">
								<label for="persiste">Mantenerme conectado</label>
								<input type="checkbox" name="persiste" id="persiste" class="form-check-input">
							</div>
							<button type="submit" class="btn btn-info btn-block">Ingresar</button>
						</form>
					</div>
				</div>

			</div>
			<div class="col-12 col-md-6">
				<div class="row registrarse">
					<div class="col-12 d-flex justify-content-between align-items-center ">
						<h4>Registrarse</h4>
					</div>
					<div class="col-12">
						<form class="form-group" method="post" >
							<input type="text" class="form-control form-name" placeholder="Nombre" name="name" id="name">
							<?php echo (($FormData->fieldHasError('name') ? $FormData->getFieldErrors('name') : '')); ?>


							<input type="text" class="form-control form-email" placeholder="Email" name="email" id="email">
							<?php echo (($FormData->fieldHasError('email') ? $FormData->getFieldErrors('email') : '')); ?>
							<input type="password" class="form-control form-password" placeholder="Contraseña" name="password" id=
							"password">
							<?php echo "Aca van los errores de contraseña"; ?>
							<input type="password" class="form-control form-password" placeholder="Confirme su contraseña" name="repassword" id=
							"repassword">
							<div class="aclaracion">
								<i class="fas fa-info-circle"></i>
								<small>La contraseña debe tener 8 caracteres como mínimo.</small>
							</div>
							<label for="FormFileAvatar" class="mt-3">Subir una foto de perfil:</label>
							<input type="file" class="form-control-file" id="FormFileAvatar" name="avatar" id="avatar">
							<?php echo "Aca van los errores de foto"; ?>
							<button type="submit" class="btn btn-info btn-block">Crear Cuenta</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php require_once ("footer.php") ?>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
