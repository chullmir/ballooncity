<?php
$pageTitle = 'Registro';
require_once 'partials/head.php';
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
        <?php if ($FormData->fieldHasError('name')): ?>
          <div class="error">
            <p>
              <?= $FormData->getFieldErrors('name') ?>
            </p>
          </div>
        <?php endif; ?>
 				<input
 				type="text"
 				name="email"
 				class="form-control form-email <?= ($FormData->fieldHasError('email') ? 'is-invalid' : ''); ?>"
 				placeholder="E-mail*"
 				id="email"
 				value="<?php echo($FormData->getEmail()); ?>">
        <?php if ($FormData->fieldHasError('email')): ?>
          <div class="error">
            <p>
              <?= $FormData->getFieldErrors('email') ?>
            </p>
          </div>
        <?php endif; ?>
        <?php if ($usuarioDuplicado): ?>
          <div class="error">
            <p>
              <?php echo "El email ingresado ya existe";  ?>
            </p>
          </div>
        <?php endif; ?>
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
        <?php if ($FormData->fieldHasError('password')): ?>
          <div class="error">
            <p>
              <?= $FormData->getFieldErrors('password') ?>
            </p>
          </div>
        <?php endif; ?>
 				<!-- <label for="FormFileAvatar" class="mt-3">Subir una foto de perfil:</label>
 				<input type="file"
 				class="form-control-file"
 				id="FormFileAvatar"
 				name="avatar"
 				id="avatar"> -->
 				<button type="submit" class="btn btn-info btn-block">Crear Cuenta</button>
 			</form>
 			<p>Ya estas registrado?</p>
 			<a href="login.php">Iniciar Sesión</a>
 		</div>
 	</div>
 </body>
 <?php
 require_once 'partials/footer.php'; ?>
