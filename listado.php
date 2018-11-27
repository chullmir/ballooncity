<?php 
error_reporting(0);
header('Content-type: application/json; charset=utf-8');

require_once 'functions.php';
require_once 'autoload.php';

$conexion = conexion($db_config);

// $conexion->set_charset("utf8");
$statement = $conexion->prepare('
	SELECT * FROM productos_balloon');
$statement->execute();
$resultados = $statement->fetchAll();

// echo "<pre>";
// var_dump($resultados);
// echo "</pre>";

$respuesta = [];
foreach ($resultados as $fila) {
	$producto =[
		'id'=>$fila['ID'],
		'codigo'=>$fila['codigo'],
		'nombre'=>$fila['nombre'],
		'stock'=>$fila['stock'],
		'tipo'=>$fila['tipo'],
		'precio'=>$fila['precio'],
		'thumb'=>$fila['thumb']
	];
	array_push($respuesta, $producto);
}

echo json_encode($respuesta);


?>