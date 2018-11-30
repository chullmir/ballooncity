<?php
require_once 'partials/head.php';
require_once 'partials/header.php';

?>

<body>
	<div class="container administrador">
		<div class="row header">
			<div class="col-12">
				<h1 class="titulo-pagina">Catálogo de Productos</h1>
			</div>
		</div>
		<div class="row body">
			<?php foreach ($productos as $producto): ?>
				<?php
				$img = RUTA.'/img/productos/'.$producto['thumb'];
				$tiene_imagen = file_exists($img);


				?>
				<div class="col-12 col-md-4 producto">
					<div class="card-producto">
						<div class="imagen">
							<!-- <?php var_dump($tiene_imagen) ?> -->

							<a href="producto.php?id=<?php echo $producto['codigo'] ?>">
								<?php if (!$tiene_imagen): ?>
									<img src="<?= RUTA ?>/img/productos/<?= $producto['thumb'] ?>" alt="">
								<?php else: ?>
									<img src="<?= RUTA ?>/img/producto/producto.jpg" alt="<?php echo $producto['nombre'] ?>" class="img-fluid">
								<?php endif ?>
							</a>
						</div>
						<a href="producto.php?id=<?php echo $producto['codigo'] ?>"><p class="product-title"><?= $producto['nombre'] ?></p></a>
						<p class="product-code"><?= $producto['codigo'] ?></p>
						<div class="botones">
							<a href="producto.php?id=<?php echo $producto['codigo'] ?>" class="btn btn-info">Ver</a>
						</div>
						
					</div>
				</div>
				
			<?php endforeach ?>




			

		</div>
	<?php require_once 'paginacion.php'; ?>
	</div>
</body>

<?php require_once 'partials/footer.php'; ?>