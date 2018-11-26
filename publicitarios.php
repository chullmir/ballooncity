<?php 
require_once 'autoload.php';
$pageTitle = 'Globos Publicitarios';
$navActive = 'nav-globos-publicitarios';
require_once 'partials/head.php';
require_once 'partials/header.php';
?>
<body>
	<div class="container publicitarios">
		<div class="row header">
			<div class="col-12">
				<h1 class="titulo-pagina">Globos Publicitarios</h1>
			</div>
		</div>
		<div class="row body">
			<div class="col-12 col-md-5 carrusel">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	 					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	 					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	 					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	 				</ol>
	 				<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/publicitarios/globospub1.png" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/publicitarios/globospub2.png" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/publicitarios/globospub3.png" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/publicitarios/globospub4.png" alt="Fourth slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/publicitarios/globospub5.png" alt="Fifth slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-md-7 texto-publicitarios">
				<p class="publi-parr">
					No hay mejor manera de llevar exposición a tu marca, ni de acercar tu mensaje a la mayor cantidad posible de gente que con globos impresos. Es el método elegido por las grandes marcas, partidos políticos que también sirve para PyMEs, eventos sociales, o cualquier ocasión que se te ocurra.
				</p>
				<p class="publi-parr">
					Tenemos la mejor tecnologia de impresion serigrafica de Argentina, ademas de una gran experiencia en promociones de gran volumen en tiempo record.
				</p>
				<p class="publi-parr">
					<b>Contamos con la tecnologia para realizar:</b>
					<ul>
						<li>Globos Impresos Publicitarios</li>
						<li>Impresion perfecta - Silk Screen: No se pierde al inflarlo</li>
						<li>Impresion a 1, 2 y 4 caras</li>
						<li>Impresion de fotografias</li>
						<li>Bautismos</li>
						<li>Casamientos</li>
						<li>Cumples</li>
						<li>Bar / Bat - Mitzvah</li>
						<li>Mensajes de todo tipo</li>
					</ul>
				</p>
				<p class="publi-parr contacto">
					<b>¿Queres ver tu mensaje de la mejor manera posible?</b>
					<br><br>
					<a href="contacto.php">Escribinos para obtener presupuesto</a>
				</p>
			</div>
		</div>
	</div>

<?php require_once 'partials/footer.php'; ?>