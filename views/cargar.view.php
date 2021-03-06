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
						<label for="codigo">Código de Producto</label>
						<input type="text" name="codigo" id="codigo" class="form-control <?= ($NuevoProducto->fieldHasError('codigo') ? 'is-invalid' : '') ?>" placeholder="Código" value="<?= $NuevoProducto->getCodigo() ?>">
						<?php if ($NuevoProducto->fieldHasError('codigo')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('codigo') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
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
						<label for="stock">Stock</label>
						<input type="number" name="stock" id="stock" class="form-control <?= ($NuevoProducto->fieldHasError('stock') ? 'is-invalid' : '') ?>" placeholder="Stock" value="<?= $NuevoProducto->getStock() ?>">
						<?php if ($NuevoProducto->fieldHasError('stock')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('stock') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="tipo">Tipo de Producto</label>
						<input type="text" name="tipo" id="tipo" class="form-control <?= ($NuevoProducto->fieldHasError('tipo') ? 'is-invalid' : '') ?>" placeholder="Tipo" value="<?= $NuevoProducto->getTipo() ?>">
						<?php if ($NuevoProducto->fieldHasError('tipo')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('tipo') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="number" name="precio" id="precio" class="form-control <?= ($NuevoProducto->fieldHasError('precio') ? 'is-invalid' : '') ?>" placeholder="Precio" value="<?= $NuevoProducto->getPrecio() ?>">
						<?php if ($NuevoProducto->fieldHasError('precio')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('precio') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="categorias">Categorias</label>
						<input type="text" name="categorias" id="categorias" class="form-control <?= ($NuevoProducto->fieldHasError('categorias') ? 'is-invalid' : '') ?>" placeholder="Categorias" value="<?= $NuevoProducto->getCategorias() ?>">
						<?php if ($NuevoProducto->fieldHasError('categorias')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('categorias') ?>
								</p>
							</div>
						<?php endif; ?>
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

					<div class="form-group">
						<label for="marca">Marca</label>
						<input type="text" name="marca" id="marca" class="form-control <?= ($NuevoProducto->fieldHasError('marca') ? 'is-invalid' : '') ?>" placeholder="Marca" value="<?= $NuevoProducto->getMarca() ?>">
						<?php if ($NuevoProducto->fieldHasError('marca')): ?>
							<div class="error">
								<p>
									<?= $NuevoProducto->getFieldErrors('marca') ?>
								</p>
							</div>
						<?php endif; ?>
					</div>

					<input type="submit" value="Cargar" class="btn btn-info btn-block">
					<a href="../profile.php" class="btn btn-danger btn-block">Volver</a>
				</form>

			</div>

		</div>
	</div>
</body>