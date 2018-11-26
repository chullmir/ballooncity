<?php
require_once 'autoload.php';
$pageTitle = 'Envíos';
$navActive = 'nav-envios';
require_once 'partials/head.php';
require_once 'partials/header.php';
?>
<body>

	<div class="container envios">
		<div class="row header">
			<div class="col">
				<h1 class="titulo-pagina">Envíos a domicilio</h1>
			</div>
		</div>
		<div class="row body">
			<div class="col">
				<h5 class="subtitulo-pagina">Tenemos delivery para todos nuestros productos!</h5>
				<p>Los globos de látex tienen una duración de entre 8-12 horas en el aire, los metalizados de 3-4 días</p>
				<div class="imagen">
					<img class="img-fluid" src="img/balloon-delivery.jpg" alt="">
				</div>
				<div class="row cards-envios">
					<div class="col-12 col-md-6 col-envios">
						<div class="iconos">
							<i class="fas fa-shipping-fast icono-envio"></i>
						</div>
						<h5>¡Capital Federal y Gran Buenos Aires!</h5>
						<p>Contamos con servicios de infladas a domicio, entrega de arreglos y bouquets. Para el resto del país, nos manejamos con el transporte que vos elijas (el transporte va a cargo del cliente).</p>
					</div>
					<div class="col-12 col-md-6 col-envios">
						<div class="iconos">
							<i class="fa fa-thumbs-up icono-envio"></i>
						</div>
						<h5>Sorprendé llenando su cuarto con globos en el techo</h5>
						<p>Ofrecemos una asesoría completa para dar con el color apropiado para ese momento tan especial desde el inicio hasta el fin con el único objetivo de hacer de su sorpresa un momento inolvidable.</p>
					</div>
				</div>
				<div class="col-12 boton-contacto">
					<a href="contacto.php" class="btn btn-info">Consultar los precios</a>
				</div>
				<p>El costo del envío tiene un recargo los días de semana entre las 19-10 hs y los sábados por la tarde, todo el domingo y feriados.</p>


			</div>

		</div>
	</div>

<?php
require_once 'partials/footer.php';
 ?>
