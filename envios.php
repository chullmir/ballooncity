<?php 
require_once 'autoload.php';
$pageTitle = 'Envíos';
$navActive = 'nav-envios';
require_once 'partials/head.php';
require_once 'partials/header.php';
?>
<body>
	<div class="container envios">
		<div class="row">
			<div class="col-12">
				<h3>Envíos a domicilio</h3>
				<h5>Tenemos delivery para todos nuestros productos!</h5>
				<p>Los globos de látex tienen una duración de entre 8-12 horas en el aire, los metalizados de 3-4 días</p>
				<img class="img-fluid" src="img/balloon-delivery.jpg" alt="">
			</div>
			<div class="col-12 col-md-6 col-envios">
				<i class="fas fa-shipping-fast"></i>
				<h5>¡Capital Federal y Gran Buenos Aires!</h5>
				<p>Contamos con servicios de infladas a domicio, entrega de arreglos y bouquets. Para el resto del país, nos manejamos con el transporte que vos elijas (el transporte va a cargo del cliente).</p>
			</div>
			<div class="col-12 col-md-6 col-envios">
				<i class="fa fa-thumbs-up"></i>
				<h5>Sorprendé llenando su cuarto con globos en el techo</h5>
				<p>Ofrecemos una asesoría completa para dar con el color apropiado para ese momento tan especial desde el inicio hasta el fin con el único objetivo de hacer de su sorpresa un momento inolvidable.</p>
			</div>
			<form action="contacto.php">
				<button type="submit" class="btn btn-info">Consultar los precios</button>
			</form>
			<div class="col-12">
				<p>El costo del envío tiene un recargo los días de semana entre las 19-10 hs y los sábados por la tarde, todo el domingo y feriados.</p>
			</div>
		</div>
	</div>
</body>



<?php 
require_once 'partials/footer.php';
 ?>