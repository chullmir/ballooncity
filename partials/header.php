<header class="fixed-top">
	<div class="container-fluid container-header">
		<div class="row header1">
			<div class="col">
				<div class="contenedor d-flex align-items-start">
					<div class="menu">
						<a href="index.php"><i class="fas fa-home"></i></a>
					</div>
					<div class="menu">
						<a href="contacto.php"><i class="fas fa-envelope"></i></a>
					</div>
					<div class="ml-auto menu">
						<?php if (isset($_SESSION['email'])): ?>
							<div class="no-sign">
								<a href="profile.php"><i class="fas fa-user-circle"></i>
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
		<a class="navbar-brand" href="index.php">
			<img src="img/logo.png" width="70px" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-envios' ? 'active' : '' ) ?>" href="envios.php">Envíos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-mayorista' ? 'active' : '' ) ?>" href="mayorista.php">Mayorista</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-franquicia' ? 'active' : '' ) ?>" href="franquicias.php">Franquicias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-faq' ? 'active' : '') ?>" href="faq.php">FAQ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-globos-publicitarios' ? 'active' : '' ) ?>" href="publicitarios.php">Globos Publicitarios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link <?php echo($navActive == 'nav-evento' ? 'active' : '' ) ?>" href="eventos.php">Eventos</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0 " action="buscar.php">
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
