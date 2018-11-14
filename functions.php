<?php
function conexion($bd_config){
  try {
    $conexion = new PDO($bd_config['dsn'],$bd_config['dbuser'],$bd_config['dbpass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}
function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}
function obtener_productos($conexion,$cant){
  $sentencia = $conexion->prepare("SELECT * FROM productos_balloon LIMIT $cant");
  $sentencia->execute();
  return $sentencia->fetchAll();
}

 ?>
