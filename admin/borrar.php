<?php 
require_once 'config.php';
require_once '../functions.php';
require_once '../autoload.php';
comprobarSession();
$conexion = conexion($db_config);
if(!$conexion){
	echo "Error 1";
}
$codigo = limpiarDatos($_GET['id']);
if (!$codigo) {
	echo "Error 2";
}
$statement = $conexion->prepare("DELETE FROM productos_balloon WHERE codigo = :codigo");

$statement->execute([
	':codigo'=>$codigo
]);
header('Location:'.RUTA.'/admin/administrar.php');






