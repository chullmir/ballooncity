<?php 
require_once 'autoload.php';
$pageTitle = 'Contacto';
require_once 'partials/head.php';
require_once 'partials/header.php';
 ?>
 <body>
 	<div class="container contacto">
 		<div class="row">
 			<div class="col-12">
 				<h3 class="titulo-pagina">Contáctenos</h4>
 			</div>
 			<div class="col-12 col-md-6">
 				<div class="nosotros">
 					<h5>Nosotros</h5>
 					<p>Estamos enfocados en maximizar el valor de la experiencia de tus celebraciones a través de la alegría y belleza que transmiten las decoraciones con globos. Contamos con un amplio catálogo de globos importados y un extenso conocimiento en decoraciones para hacer ese momento realmente único.</p>
 				</div>
 				<div class="preguntas">
 					<h5>¿Tienes alguna pregunta?</h5>
 					<p>Estamos aquí para responder cualquier pregunta que pueda tener. Comuníquese con nosotros y le responderemos tan pronto como podamos. Puede contactarnos por correo electrónico a: <a href="mailto:info@ballooncity.com.ar">info@ballooncity.com.ar</a>, o utilizar el formulario de contacto a continuación.</p>
 				</div>
 			</div>
 			<div class="col-12 col-md-6 formulario">
 				<form action="" method="post">
 					<div class="form-group">
 						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
 					</div>
 					<div class="form-group">
 						<input type="number" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
 					</div>
 					<div class="form-group">
 						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
 					</div>
 					<div class="form-group">
 						<textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje" cols="30" rows="7"></textarea>
 					</div>
 					<button type="submit" class="btn btn-info">Enviar Mensaje</button>
 				</form>
 			</div>
 		</div>
 	</div>
 </body>
 <?php require_once 'partials/footer.php'; ?>