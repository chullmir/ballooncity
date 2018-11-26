<?php 
require_once '../partials/head.php';
require_once '../partials/header.php';
?>
<body>
	<div class="container carga-producto">
		<div class="row header">
			<div class="col">
				<h1 class="titulo-pagina">Cargar Producto</h1>
			</div>
		</div>
		<div class="row body">
			<div class="col">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
					<div class="form-group">
						<label for="nombre">Nombre del Producto</label>
						<input type="text" name="nombre" id="nombre" class="form-control <?= ($NuevoProducto->fieldHasError('nombre') ? 'is-invalid' : '') ?>" placeholder="Nombre del Producto" value="<?= $NuevoProducto->getName() ?>">
						<?php if ($NuevoProducto->fieldHasError('nombre')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('nombre') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="codigo">Código de Producto</label>
						<input type="text" name="codigo" id="codigo" class="form-control <?= ($NuevoProducto->fieldHasError('codigo') ? 'is-invalid' : '') ?>" placeholder="Código">
						<?php if ($NuevoProducto->fieldHasError('codigo')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('codigo') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="number" name="precio" id="precio" class="form-control <?= ($NuevoProducto->fieldHasError('precio') ? 'is-invalid' : '') ?>" placeholder="Precio">
						<?php if ($NuevoProducto->fieldHasError('precio')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('precio') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="stock">Stock</label>
						<input type="number" name="stock" id="stock" class="form-control <?= ($NuevoProducto->fieldHasError('stock') ? 'is-invalid' : '') ?>" placeholder="Stock">
						<?php if ($NuevoProducto->fieldHasError('stock')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('stock') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="categoria">Categoría</label>
						<input type="text" name="categoria" id="categoria" class="form-control" placeholder="Categoría">
					</div>
					<div class="form-group">
						<label for="thumb">Cargar Imagen:</label>
						<input type="file" id="thumb" name="thumb">
						<?php if ($NuevoProducto->fieldHasError('thumb')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('thumb') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<input type="submit" value="Cargar" class="btn btn-info">
				</form>

			</div>

		</div>
	</div>
</body>