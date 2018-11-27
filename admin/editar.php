<?php
require_once '../functions.php';
$pageTitle = 'Editar Producto';
require_once '../autoload.php';
$conexion = conexion($db_config);
$id_producto = id_producto($_GET['id']);
if (!$conexion) {
	header('Location:index.php');
}
if (empty($id_producto)) {
	header('Location:index.php');
}
$producto = obtener_producto_por_codigo($conexion,$id_producto);
$producto = $producto[0];
if (!$producto) {
	header('Location:index.php');
}
if ($_POST) {
	$codigo = limpiarDatos($_POST['codigo']);
	$nombre = limpiarDatos($_POST['nombre']);
	$stock = limpiarDatos($_POST['stock']);
	$tipo = limpiarDatos($_POST['tipo']);
	$precio = limpiarDatos($_POST['precio']);

}



require_once '../views/editar.view.php';




?>