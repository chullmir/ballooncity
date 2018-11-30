<body>

	
<div class="container busqueda">
	<div class="row header">
		<div class="col-12">
			<!-- <h1 class="titulo-pagina">Resultados de busqueda para: <?php echo $_GET['busqueda']; ?></h1> -->
			<h1 class="titulo-pagina"><?php echo "$titulo"; ?></h1>
		</div>
	</div>
	<div class="row body">
		<?php foreach ($resultados as $producto): ?>
				<?php
				$img = RUTA.'/img/productos/'.$producto['thumb'];
				$tiene_imagen = file_exists($img);


				?>
				<div class="col-12 col-md-4 producto">
					<div class="card-producto">
						<div class="imagen">
							<!-- <?php var_dump($tiene_imagen) ?> -->
							<?php if (!$tiene_imagen): ?>
								<img src="<?= RUTA ?>/img/productos/<?= $producto['thumb'] ?>" alt="">
							<?php else: ?>
								<img src="<?= RUTA ?>/img/producto/producto.jpg" alt="<?php echo $producto['nombre'] ?>" class="img-fluid">
							<?php endif ?>
						</div>
						<p class="product-title"><?= $producto['nombre'] ?></p>
						<p class="product-code"><?= $producto['codigo'] ?></p>
						<div class="botones">
							<a href="producto.php?id=<?php echo $producto['codigo'] ?>" class="btn btn-info">Ver</a>
						</div>
						
					</div>
				</div>
				
			<?php endforeach ?>

	</div>

</div>









</body>
