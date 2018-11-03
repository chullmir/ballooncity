<?php
require_once 'autoload.php';
$pageTitle = 'Mi Perfil';
require_once 'partials/head.php';
require_once 'partials/header.php';
?>
<body>
	<div class="container profile">
		<h3 class="titulo-pagina">Bienvenido <?= ucfirst($_SESSION['name']) ?></h3>
		<a href="logout.php">Cerrar Sesión</a>
	</div>
	
</body>



<?php
require_once 'partials/footer.php';
 ?>
