<?php
// echo "<pre>";
// var_dump($producto);
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
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
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
						<input type="file">
					</div>
					<div class="botones">
						<input type="submit" class="btn btn-info" value="Guardar">
						<a href="#" class="btn btn-danger">Cancelar</a>
					</div>
				</form>
			</div>

		</div>

	</div>


</body>