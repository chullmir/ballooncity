<?php 
require_once 'autoload.php';
$navActive = 'nav-franquicia';
$pageTitle = 'Franquicias';
require_once 'partials/head.php';
require_once 'partials/header.php';
 ?>
 <body>
 	<div class="container franquicias">
 		<div class="row">
 			<div class="col-12">
 				<h3 class="titulo-pagina">La Empresa</h3>
 				<h5 class="subtitulo-pagina">Balloon City es una empresa Argentina altamente innovadora.</h5>
 				<p>Creada en 1989 es líder en Latino-América en el negocio de los globos. Tenemos presencia en más de 30 centros comerciales en todo el país, asegurando la mejor selección de productos, reposición automática, precios competitivos y alta rentabilidad en un ambiente profesional. Brindamos un entrenamiento que hará que la persona más inexperta se convierta en un gran profesional.</p>
 			</div>
 			<div class="col-12">

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
 							<img class="d-block w-100" src="img/franquicias/franquicias1.jpg" alt="First slide">
 						</div>
 						<div class="carousel-item">
 							<img class="d-block w-100" src="img/franquicias/franquicias2.jpg" alt="Second slide">
 						</div>
 						<div class="carousel-item">
 							<img class="d-block w-100" src="img/franquicias/franquicias3.jpg" alt="Third slide">
 						</div>
 						<div class="carousel-item">
 							<img class="d-block w-100" src="img/franquicias/franquicias4.jpg" alt="Fourth slide">
 						</div>
 						<div class="carousel-item">
 							<img class="d-block w-100" src="img/franquicias/franquicias5.jpg" alt="Fifth slide">
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
 				
 				<h4>Concepto de Negocio</h4>
 				<p>
 					Ofrecemos una experiencia impactante para el consumidor, con ventajas muy marcadas, calidad y precios inmejorables sobre productos novedosos y de gran impacto visual.
 					<br>
 					Un atractor de público, respaldado por la experiencia internacional que disfrutan nuestros asociados, explotando hace años formatos de negocios probados y exitosos, respaldados por la experiencia de ser líderes en la venta de globos y productos para fiestas por más de 28 años. Ponemos todo nuestro expertise a tu disposición para asesorarte y formar tu negocio.
 				</p>
 				<h4>Nuestros Locales/Stands</h4>
 				<p>
 					Te ofrecemos dos formatos de negocios: dentro de los shoppings y locales a la calle, acompañándote en la elección del espacio para la instalación de tu negocio, construcción y armado el espacio. Te acompañamos desde el principio.
 				</p>
 				<h4>Acuerdos comerciales</h4>
 				<p>Balloon City de Argentina posee acuerdos comerciales con los principales líderes internacionales del sector, poseemos los permisos para comercializar las mejores marcas y licencias de personajes (Disney, Minions, hombre araña y todos los personajes de Marvel, etc,) para poder, con la mayor variedad de productos, asegurarte la mejor calidad.</p>
 				<h4>Soporte Comercial</h4>
 				<p>Al momento de contratar una de nuestras franquicias, accedes a nuestro asesoramiento en la definición del local con respecto a la zona y sus características. Adicionalmente contamos con un equipo de personas especializadas que dan seguimiento diario al buen desempeño de nuestros locales, asistiendo y capacitando en busca de una mejora continua.</p>
 			</div>
 			<div class="col-12 contacto">
 				<a href="contacto.php">¿Tienes alguna pregunta sobre nuestras Franquicias?</a>
 			</div>
 		</div>
 	</div>
 	<?php require_once 'partials/footer.php'; ?>
 </body>