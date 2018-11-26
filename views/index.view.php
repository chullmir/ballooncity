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
									<a href="#"><img src="img/producto/producto.jpg" alt="" class="img-fluid"></a>
								</div>
								<a href="#"><h5 class="product-title"><?php echo $producto['nombre']; ?></h5></a>
								<p class="product-price"><?php echo $producto['precio']; ?></p>
								<a href="#" class="btn btn-info">Comprar</a>
								<a href="#" class="btn btn-secondary">Ver</a>
							</div>
						</div>
						
					<?php endforeach ?>
					

					
					


				</div>
				
			</div>
			<?php
			echo "<pre>";
			var_dump($productos);
			echo "</pre>";
			?>
		</div>
		<div class="col-md-3 aside">
			Aside
		</div>
	</div>
</div>



