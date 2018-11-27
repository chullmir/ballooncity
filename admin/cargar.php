<?php 
require_once '../autoload.php';
$pageTitle = 'Cargar Producto';
require_once '../functions.php';
$NuevoProducto = new LoadForm($_POST,$_FILES);
// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();
// Conectamos a la base de datos
$conexion = conexion($db_config);
if(!$conexion){
	header('Location: ../error.php');
}
if ($_POST) {
	if ($NuevoProducto->isValid()) {
		$codigo = $NuevoProducto->getCodigo();
		$nombre = $NuevoProducto->getName();
		$stock = $NuevoProducto->getStock();
		$tipo = $NuevoProducto->getTipo();
		$precio = $NuevoProducto->getPrecio();
		// $categoria = $NuevoProducto->getCategoria();
		$thumb = $NuevoProducto->getThumb();

		// Direccion final del archivo incluyendo el nombre
		# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
		# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
		$destino_archivo = '../' . $site_config['carpeta_productos'] . $_FILES['thumb']['name'];

		// Subimos el archivo
		move_uploaded_file($thumb, $destino_archivo);

		$statement = $conexion->prepare(
			'INSERT INTO productos_balloon (id,codigo,nombre,stock,tipo,precio,thumb)
			VALUES (null,:codigo,:nombre,:stock,:tipo,:precio,:thumb)'
		);
		$statement->execute([
			':codigo'=>$codigo,
			':nombre'=>$nombre,
			':stock'=>$stock,
			':tipo'=>$tipo,
			':precio'=>$precio,
			':thumb'=>$_FILES['thumb']['name']
			// ':categoria'=>$categoria
		]);
		header('Location:../profile.php');
	}
	
	
}



require_once '../views/cargar.view.php';
 ?>