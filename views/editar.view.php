<?php
require_once '../partials/head.php';
require_once '../partials/header.php';

// echo "<pre>";
// var_dump($producto);
// echo "</pre>";
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
?>

<body>

	
	<div class="container template">
		<div class="row header">
			<div class="col-12">
				<h1 class="titulo-pagina">Editar Producto</h1>
			</div>
		</div>
		<div class="row body">
			<div class="col-12">
				<!-- <?php var_dump($producto) ?> -->
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
					<input type="hidden" name="id" value="<?php echo $producto['ID'] ?>">
					<div class="form-group">
						<label for="codigo">Código de Producto</label>
						<input type="text" name="codigo" class="form-control" value="<?php echo $producto['codigo'] ?>">
					</div>
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" value="<?php echo limpiarDatos($producto['nombre']) ?>">
					</div>
					<div class="form-group">
						<label for="stock">Stock</label>
						<input type="number" name="stock" class="form-control" value="<?php echo $producto['stock'] ?>">
					</div>
					<div class="form-group">
						<label for="tipo">Tipo</label>
						<input type="text" name="tipo" class="form-control" value="<?php echo $producto['tipo'] ?>">
					</div>
					<div class="form-group">
						<label for="precio">Precio</label>
						<input type="number" name="precio" class="form-control" value="<?php echo $producto['precio'] ?>">
					</div>
					<div class="form-group">
						<input type="file" name="thumb">
						<input type="hidden" name="thumb-guardada" value="<?php echo $producto['thumb'] ?>">
					</div>
					<div class="form-group">
						<label for="marca">Marca</label>
						<input type="text" name="marca" class="form-control" value="<?php echo $producto['marca'] ?>">
					</div>
					<div class="form-group">
						<label for="categorias">Categorias</label>
						<input type="text" name="categorias" class="form-control" value="<?php echo $producto['categorias'] ?>">
					</div>

					<div class="botones">
						<input type="submit" class="btn btn-info" value="Guardar">
						<a href="administrar.php" class="btn btn-danger">Cancelar</a>
					</div>
				</form>
			</div>

		</div>

	</div>


</body>
<?php require_once '../partials/footer.php'; ?>