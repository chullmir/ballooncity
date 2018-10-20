<?php require_once 'autoload.php';
$pageTitle = 'Registro';
require_once 'partials/head.php';
$FormData = new RegisterFormValidator($_POST,$_FILES);
if ($auth->isLogged()) {
	// header('location:profile.php');
}
if ($_POST) {
	if ($FormData->isValid()) {
		if ($db->emailExist($FormData->getEmail())) {
			$FormData->addError('email','Correo ya está registrado');
		} else {
			$imageName = SaveImage::uploadImage($_FILES['avatar']);
			$_POST['image'] = $imageName;
			$user = new User($_POST);
			$user->setId($db->generateId());
			$db->saveUser($user);
			$auth->logIn($user->getEmail());
		}
	}
}
// echo "<pre>";
// var_dump($_POST);

// var_dump($_FILES);
// echo "</pre>";
require_once 'partials/header.php';

?>
<body>
	<div class="container signjoin">
		<div class="col-12">
			<h4>Registrarse</h4>
		</div>
		<div class="col-12">
			<form class="form-group" method="post" enctype="multipart/form-data">
				<input 
				type="text"
				name="name"
				class="form-control form-name <?= ($FormData->fieldHasError('name') ? 'is-invalid' : ''); ?>" 
				placeholder="Nombre*"
				id="name" 
				value="<?php echo($FormData->getName()); ?>">
				<input 
				type="text"
				name="email"
				class="form-control form-email <?= ($FormData->fieldHasError('email') ? 'is-invalid' : ''); ?>" 
				placeholder="E-mail*"
				id="email" 
				value="<?php echo($FormData->getEmail()); ?>">
				<input 
				type="password"
				name="password"
				class="form-control form-password <?= ($FormData->fieldHasError('password') ? 'is-invalid' : ''); ?>" 
				placeholder="Constraseña*"
				id="password" 
				value="">
				<div class="aclaracion">
					<i class="fas fa-info-circle"></i>
					<small>La contraseña debe tener 8 caracteres como mínimo.</small>
				</div>
				<input 
				type="password"
				name="repassword"
				class="form-control form-password <?= ($FormData->fieldHasError('password') ? 'is-invalid' : ''); ?>" 
				placeholder="Confirmar contraseña*"
				id="repassword" 
				value="">
				<label for="FormFileAvatar" class="mt-3">Subir una foto de perfil:</label>
				<input type="file" 
				class="form-control-file" 
				id="FormFileAvatar" 
				name="avatar" 
				id="avatar">
				<button type="submit" class="btn btn-info btn-block">Crear Cuenta</button>
			</form>
		</div>
	</div>
</body>