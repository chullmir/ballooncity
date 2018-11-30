<?php
require_once 'functions.php';
require_once 'admin/config.php';
require_once 'autoload.php';
$pageTitle = 'Buscar';
$conexion = conexion($db_config);
if(!$conexion){
	echo "Error 1";
	// header('Location: ../error.php');
}




if ($_GET && !empty($_GET['busqueda'])) {
	$busqueda = limpiarDatos($_GET['busqueda']);

	$statement =$conexion->prepare(
		"SELECT * FROM productos_balloon WHERE nombre LIKE :busqueda or codigo Like :busqueda or tipo Like :busqueda"
	);
	$statement->execute([
		':busqueda' => "%$busqueda%"
	]);

	$resultados = $statement->fetchAll();
	
	if (empty($resultados)) {
		$titulo = 'No se encontraron productos con el resultado: ' . $busqueda;
	} else {
		$titulo = 'Resultados de la busqueda: ' . $busqueda;
	}

} else {
	header('Location:' . RUTA . '/index.php');
}



require_once 'partials/head.php';
require_once 'partials/header.php';
require_once 'views/buscar.view.php';
require_once 'partials/footer.php';



 ?>
