<header class="fixed-top">
	<div class="container-fluid container-header">
		<div class="row header1">
			<div class="col">
				<div class="contenedor d-flex align-items-start">
					<div class="menu">
						<a href="<?php echo(RUTA); ?>/"><i class="fas fa-home"></i></a>
					</div>
					<div class="menu">
						<a href="<?= RUTA ?>/contacto.php"><i class="fas fa-envelope"></i></a>
					</div>
					<div class="ml-auto menu">
						<?php if (isset($_SESSION['email'])): ?>
							<div class="no-sign">
								<a href="<?= RUTA ?>/profile.php"><i class="fas fa-user-circle"></i>
								Mi Perfil</a>
							</div>
						<?php else: ?>
							<div class="no-sign">
								<a href="login.php"><i class="fas fa-sign-in-alt"></i>
								Sign In</a>
							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="<?= RUTA ?>/">
			<img src="<?= RUTA ?>/img/logo.png" width="70px" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-productos' ? 'active' : '' ) ?>" href="<?= RUTA ?>/catalogo.php">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-mayorista' ? 'active' : '' ) ?>" href="<?= RUTA ?>/mayorista.php">Mayorista</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-envios' ? 'active' : '' ) ?>" href="<?= RUTA ?>/envios.php">Envíos</a>
				</li>
				
				<!-- <li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-franquicia' ? 'active' : '' ) ?>" href="<?= RUTA ?>/franquicias.php">Franquicias</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-globos-publicitarios' ? 'active' : '' ) ?>" href="<?= RUTA ?>/publicitarios.php">Globos Publicitarios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-evento' ? 'active' : '' ) ?>" href="<?= RUTA ?>/eventos.php">Eventos</a>
				</li> -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="<?= RUTA ?>/franquicias.php" class="dropdown-item">Franquicias</a>
						<div class="dropdown-divider"></div>
						<a href="<?= RUTA ?>/eventos.php" class="dropdown-item">Eventos</a>
						<a href="<?= RUTA ?>/publicitarios.php" class="dropdown-item">Globos Publicitarios</a>
						
						
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-faq' ? 'active' : '') ?>" href="<?= RUTA ?>/faq.php">FAQ</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0 " action="<?php echo RUTA ?>/buscar.php">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" name="busqueda">

				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>

			</form>
		</div>
	</nav>
	<div class="container-fluid container-venta">
		<div class="row">
			<div class="col d-flex justify-content-center">
				<a href="puntos-venta.php"><i class="fas fa-store-alt"></i> Puntos de Venta</a>
			</div>
		</div>
	</div>
</header>
