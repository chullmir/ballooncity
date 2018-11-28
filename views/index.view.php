<div class="container-fluid">
	<div id="carouselIndicators" class="carousel slide d-none d-md-block" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselIndicators" data-slide-to="1"></li>
			<li data-target="#carouselIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/slider-home/slider-1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/slider-home/slider-2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/slider-home/slider-3.jpg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="row d-flex flex-row-reverse">
		<div class="col-12 col-md-9 body-index">
			<div class="container listado-productos">
				<div class="row">
					<?php foreach ($productos as $producto): ?>
						<div class="col-6 col-lg-4 producto">
							<div class="card-producto">
								<div class="img-producto">
									<a href="producto.php?id=<?php echo $producto['codigo'] ?>">
										<?php if (file_exists('img/productos/'.$producto['thumb'])): ?>
											<img src="img/productos/<?= $producto['thumb'] ?>" alt="">
										<?php else: ?>
											<img src="img/producto/producto.jpg" alt="" class="img-fluid">
										<?php endif ?>
										
									</a>
								</div>
								<a href="producto.php?id=<?php echo $producto['codigo'] ?>" class="product-title"><h5><?php echo $producto['nombre']; ?></h5></a>
								<p class="product-price"><?php echo $producto['precio']; ?></p>
								<a href="#" class="btn btn-info">Comprar</a>
								<a href="producto.php?id=<?php echo $producto['codigo'] ?>" class="btn btn-secondary">Ver</a>
							</div>
						</div>
						
					<?php endforeach ?>
					

					
					


				</div>
				
			</div>
			<?php
			// echo "<pre>";
			// var_dump($productos);
			// echo "</pre>";
			?>
		</div>
		<div class="col-md-3 aside">
			<?php require_once 'aside.php'; ?>
		</div>
	</div>
</div>



