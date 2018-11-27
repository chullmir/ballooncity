<?php 
require_once 'partials/head.php';
require_once 'partials/header.php';
 ?>
 <body>
	<div class="container template">
		<div class="row header">
			<div class="col-12">
				<h1 class="titulo-pagina">Titulo de Pagina</h1>
			</div>
		</div>
		<div class="row body">
			<div class="col-12">
				<h5 class="subtitulo-pagina">Subtitulo de Pagina</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt sodales sem, vel tincidunt massa pulvinar ultrices. Vestibulum fringilla nulla a lobortis laoreet. Phasellus sit amet ullamcorper felis. Ut sodales nunc ut arcu sodales accumsan. Fusce neque dui, lobortis et felis id, mollis lacinia lectus. Praesent massa justo, gravida eget vestibulum id, egestas et mauris. Integer at mi enim. Mauris et tortor ut lectus imperdiet ornare.</p>
			</div>

		</div>

	</div>



 	<?php 
 	// echo "<pre>";
 	// print_r($productos);
 	// echo "</pre>";
 	?>
 	<div class="container listado-productos">
 		<div class="row">
 			<div class="col-12">
 				<h1 class="titulo-pagina">Listado de Productos</h1>
 			</div>
 			<div class="col-12 contenedor">
 				<div class="row">
	 				<?php foreach ($productos as $producto): ?>
	 					<div class="card-producto col-6 col-sm-4 col-lg-3">
	 						<a href="producto.php?id=<?php echo $producto['codigo'] ?>">
			 					<div class="imagen">
			 						<?php if (file_exists("img/productos/".$producto['imagen'])): ?>
			 							<img src="img/productos/<?php echo($producto['imagen']) ?>" alt="">
		 							<?php else: ?>
		 								<img src="img/producto/producto.jpg" alt="">
			 							
			 						<?php endif ?>
			 					</div>
			 				</a>
		 					<h3 class="titulo-producto"><?= $producto['nombre']; ?></h3>
		 					<h4 class="precio"><?= $producto['precio']; ?></h4>
		 				</div>
	 				<?php endforeach ?>
 				</div>
 			</div>
 			<?php require_once 'paginacion.php'; ?>
 		</div>
 	</div>
 </body>