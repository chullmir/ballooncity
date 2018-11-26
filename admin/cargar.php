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
		$nombre = $NuevoProducto->getName();
		$codigo = $NuevoProducto->getCodigo();
		$precio = $NuevoProducto->getPrecio();
		$stock = $NuevoProducto->getStock();
		$categoria = $NuevoProducto->getCategoria();
		$thumb = $NuevoProducto->getThumb();

		// Direccion final del archivo incluyendo el nombre
		# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
		# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
		$destino_archivo = '../' . $site_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
		// Subimos el archivo
		move_uploaded_file($thumb, $destino_archivo);

		$statement = $conexion->prepare(
			'INSERT INTO productos_balloon (id,nombre,codigo,precio,stock,categoria,imagen)
			VALUES (null,:nombre,:codigo,:precio,:stock,:categoria,:imagen)'
		);
		$statement->execute([
			':nombre'=>$nombre,
			':codigo'=>$codigo,
			':precio'=>$precio,
			':stock'=>$stock,
			':categoria'=>$categoria,
			':imagen'=>$_FILES['thumb']['name']
		]);

	}
	// echo "<pre>";
	// var_dump($NuevoProducto);
	// echo "</pre>";
	
	
}



require_once '../views/cargar.view.php';
 ?>