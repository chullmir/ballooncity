<?php
require_once 'autoload.php';
$pageTitle = 'Mi Perfil';
require_once 'partials/head.php';
require_once 'partials/header.php';
?>
<body>
	<div class="container profile">
		<div class="row header">
			<div class="col">
				<h1 class="titulo-pagina">Bienvenido <?= ucfirst($_SESSION['name']) ?></h1>
			</div>
		</div>
		<div class="row body">
			<div class="col">
				<?php if ($_SESSION['admin']): ?>
					<h5 class="subtitulo-pagina">Admin</h5>
				<?php endif ?>
				
				<?php if ($_SESSION['admin']): ?>
					<a href="admin/cargar.php" class="btn btn-info">Cargar Producto</a>
					<a href="admin/administrar.php" class="btn btn-info">Administrar Productos</a>
				
				<?php endif ?>



			</div>


		</div>
		<a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
	</div>


</body>



<?php
require_once 'partials/footer.php';
 ?>
